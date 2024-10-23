import os
from dotenv import load_dotenv
from langchain_core.messages import AIMessage, HumanMessage
from langchain_core.prompts import ChatPromptTemplate
from langchain_core.runnables import RunnablePassthrough
from langchain_community.utilities import SQLDatabase
from langchain_core.output_parsers import StrOutputParser
from langchain_groq import ChatGroq
import streamlit as st
import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sns
import altair as alt
from sshtunnel import SSHTunnelForwarder

# Load environment variables from .env file
load_dotenv()

# Initialize database connection
def init_database() -> SQLDatabase:
    mysql_host = os.getenv('MYSQL_HOST')
    mysql_port = int(os.getenv('MYSQL_PORT'))
    mysql_user = os.getenv('MYSQL_USER')
    mysql_password = os.getenv('MYSQL_PASSWORD')
    mysql_database = os.getenv('MYSQL_DATABASE')

    db_uri = f"mysql+mysqlconnector://{mysql_user}:{mysql_password}@{mysql_host}:{mysql_port}/{mysql_database}"

    return SQLDatabase.from_uri(db_uri)


# Function to handle SQLInterfaceError: Commands out of sync
def run_query(db, query):
    try:
        result = db.run(query)
        return result
    except Exception as e:
        st.error(f"Error executing query: {str(e)}")

# Function to get SQL chain for processing user queries
def get_sql_chain(db):
    template = """
        You are a senior data analyst at MERQ Consultancy. You are interacting with a user who is asking you questions about the Dereja Monitoring and Evaluation System's database.
        Based on the table schema below, write a SQL query that would answer the user's question. Take the conversation history into account.

        <SCHEMA>{schema}</SCHEMA>

        Conversation History: {chat_history}

        Write only the SQL query and nothing else. Do not wrap the SQL query in any other text, not even backticks.

        For example:
        Question: List all inactive users from the 'users' table.
        SQL Query: SELECT * FROM users WHERE status = 'inactive';

        Question: Retrieve the details of products priced above $50.
        SQL Query: SELECT * FROM products WHERE price > 50;

        Question: Find the total number of orders placed in the last 7 days.
        SQL Query: SELECT COUNT(*) AS total_orders FROM orders WHERE order_date >= DATE_SUB(NOW(), INTERVAL 7 DAY);

        Question: Show the names of products that are in stock and have a quantity greater than 100.
        SQL Query: SELECT product_name FROM products WHERE stock > 0 AND quantity > 100;

        Question: Get the average price of products in the 'electronics' category.
        SQL Query: SELECT AVG(price) AS average_price FROM products WHERE category = 'electronics';

        Question: List the customer IDs and their total order amounts, sorted by total amount in descending order.
        SQL Query: SELECT customer_id, SUM(total_amount) AS total_spent FROM orders GROUP BY customer_id ORDER BY total_spent DESC;

        Question: Find the products that have never been ordered.
        SQL Query: SELECT * FROM products WHERE product_id NOT IN (SELECT DISTINCT product_id FROM orders);

        Question: Retrieve the details of the most expensive product in each category.
        SQL Query: SELECT * FROM products p1 WHERE price = (SELECT MAX(price) FROM products p2 WHERE p1.category_id = p2.category_id);

        Question: Count the number of orders placed by each customer.
        SQL Query: SELECT customer_id, COUNT(*) AS order_count FROM orders GROUP BY customer_id;

        Question: Show the details of orders that include a specific product ID.
        SQL Query: SELECT * FROM orders WHERE product_id = 10;

        Your turn:

        Question: {question}
        SQL Query:
        """

    prompt = ChatPromptTemplate.from_template(template)

    llm = ChatGroq(model="llama3-8b-8192", temperature=0.2) #llama3-8b-8192 OR #mixtral-8x7b-32768

    def get_schema(_):
        return db.get_table_info()

    return (
        RunnablePassthrough.assign(schema=get_schema)
        | prompt
        | llm
        | StrOutputParser()
    )

# Function to get response to user query
def get_response(user_query: str, db: SQLDatabase, chat_history: list):
    sql_chain = get_sql_chain(db)

    template = """
        You are a senior data analyst at MERQ Consultancy. You are interacting with a user who is asking you questions about the company's database.
        Based on the table schema below, question, sql query, and sql response, write a natural language response.
        <SCHEMA>{schema}</SCHEMA>

        Conversation History: {chat_history}
        SQL Query: <SQL>{query}</SQL>
        User question: {question}
        SQL Response: {response}"""

    prompt = ChatPromptTemplate.from_template(template)

    llm = ChatGroq(model="llama3-8b-8192", temperature=0.2) #llama3-8b-8192 OR #mixtral-8x7b-32768

    chain = (
        RunnablePassthrough.assign(query=sql_chain).assign(
            schema=lambda _: db.get_table_info(),
            response=lambda vars: run_query(db, vars["query"]),
        )
        | prompt
        | llm
        | StrOutputParser()
    )

    return chain.invoke({
        "question": user_query,
        "chat_history": chat_history,
    })

# Function to create a line chart
def create_line_chart(data, x, y, title):
    plt.figure(figsize=(10, 6))
    sns.lineplot(x=x, y=y, data=data, marker='o')
    plt.title(title)
    plt.xticks(rotation=45)
    st.pyplot()

# Function to create a bar chart
def create_bar_chart(data, x, y, title):
    plt.figure(figsize=(10, 6))
    sns.barplot(x=x, y=y, data=data)
    plt.title(title)
    plt.xticks(rotation=45)
    st.pyplot()

# Function to create a pie chart
def create_pie_chart(data, labels, title):
    plt.figure(figsize=(10, 6))
    plt.pie(data, labels=labels, autopct='%1.1f%%', startangle=140)
    plt.title(title)
    st.pyplot()

# Streamlit UI
if "chat_history" not in st.session_state:
    st.session_state.chat_history = [
        AIMessage(content="ታድያስ / Hello! I'm MERQ AI Data Assistant. Ask me anything about your Dereja Monitoring and Evaluation System Data."),
    ]

st.set_page_config(page_title="Chat with Dereja M&E System", page_icon=":speech_balloon:")

st.title("Chat with MERQ-AI Data Assistant")

with st.sidebar:
    st.header("AI-powered analysis and interpretation")
    st.subheader("Instructions")
    st.write("This is a simple chat application using the DEREJA M&E Data. Tap/Click on the button below to start chatting.")

    if st.button("CLICK Here To START"):
        with st.spinner("Connecting to MERQ AI..."):
            db = init_database()
            st.session_state.db = db
            st.success("Connected to MERQ AI!")

for message in st.session_state.chat_history:
    if isinstance(message, AIMessage):
        with st.chat_message("AI"):
            st.markdown(message.content)
    elif isinstance(message, HumanMessage):
        with st.chat_message("Human"):
            st.markdown(message.content)

user_query = st.chat_input("አባከዎ ጥያቄዎን ይፃፉ.... Type a message...")
if user_query is not None and user_query.strip() != "":
    st.session_state.chat_history.append(HumanMessage(content=user_query))

    with st.chat_message("Human"):
        st.markdown(user_query)

    with st.chat_message("AI"):
        response = get_response(user_query, st.session_state.db, st.session_state.chat_history)
        st.markdown(response)

        # Data visualization based on response
        if "SELECT" in user_query.upper() and "GRAPH:" in response:
            lines = response.split('\n')
            graph_type = None
            for line in lines:
                if "Graph:" in line:
                    graph_type = line.split(':')[-1].strip()
                    break
            
            if graph_type == 'Line graph':
                df = pd.DataFrame(run_query(st.session_state.db, user_query))
                if not df.empty:
                    create_line_chart(df, df.columns[0], df.columns[1], "Line Chart")
            
            elif graph_type == 'Bar chart':
                df = pd.DataFrame(run_query(st.session_state.db, user_query))
                if not df.empty:
                    create_bar_chart(df, df.columns[0], df.columns[1], "Bar Chart")
            
            elif graph_type == 'Pie chart':
                data = run_query(st.session_state.db, user_query)
                labels = [str(item[0]) for item in data]
                values = [float(item[1]) for item in data]
                create_pie_chart(values, labels, "Pie Chart")

    st.session_state.chat_history.append(AIMessage(content=response))
