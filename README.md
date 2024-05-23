# MIKEINTOSH PHP DASHBOARD APP
MIKEINTOSH AIO Data Visualization Dashboard


[![Docker Build and Deploy](https://github.com/MIKEINTOSHSYSTEMS/mikeintoshaiodashboard/actions/workflows/docker-build-and-deploy.yml/badge.svg)](https://github.com/MIKEINTOSHSYSTEMS/mikeintoshaiodashboard/actions/workflows/docker-build-and-deploy.yml)



## Overview

Provide a brief overview of the project, including its purpose, features, and any relevant background information. You can also include a high-level architecture diagram if applicable.

## Prerequisites

List all the prerequisites and dependencies required to run the project. This might include software, libraries, or services that need to be installed or configured beforehand.

- Docker
- Docker Compose
- GitHub account
- Docker Hub account
- Access to a server for deployment

## Installation

1. Clone the repository to your local machine.

   ```bash
   git clone https://github.com/MIKEINTOSHSYSTEMS/mikeintoshaiodashboard.git
   ```

2. Navigate to the project directory.

   ```bash
   cd your-repository
   ```

3. Build the Docker image.

   ```bash
   docker-compose build
   ```

## Configuration

Explain any configuration options or environment variables that need to be set before running the project. This might include API keys, database connection strings, etc.

1. Create a `.env` file in the project root directory.

   ```plaintext
   # Example .env file
   VARIABLE_NAME=value
   ```

## Usage

Describe how to use the project once it's set up. Provide examples and instructions for common tasks or workflows.

1. Start the project using Docker Compose.

   ```bash
   docker-compose up
   ```

2. Access the application in your web browser at `http://localhost:8080`.

## Deployment

Explain how to deploy the project to a server or cloud platform. Include steps for setting up deployment pipelines, configuring servers, etc.

1. Push changes to the `main` branch of your GitHub repository.

   ```bash
   git push origin main
   ```

2. GitHub Actions will automatically trigger the `docker-build-and-deploy.yml` workflow.

3. Monitor the workflow progress on the GitHub Actions page.

4. Once the workflow completes successfully, the Docker image will be deployed to your server and the containers will be restarted.

## Contributing

Provide guidelines for contributing to the project, including how to report issues, submit feature requests, and contribute code.

1. Fork the repository on GitHub.

2. Clone your forked repository to your local machine.

   ```bash
   git clone https://github.com/your-username/your-forked-repository.git
   ```

3. Create a new branch for your feature or bug fix.

   ```bash
   git checkout -b feature-or-bug-fix
   ```

4. Make your changes and commit them.

   ```bash
   git commit -m "Your commit message"
   ```

5. Push your changes to your forked repository.

   ```bash
   git push origin feature-or-bug-fix
   ```

6. Open a pull request on GitHub and describe your changes in detail.

## License

Include information about the project's license. You can use a standard license file or include the license text directly in the README.

This project is licensed under the [MIT License](LICENSE).

## Acknowledgements

List any acknowledgements or credits for third-party libraries, resources, or individuals who contributed to the project.

- [MIKEINTOSH-SYSTEMS](https://mikeintoshsys.com)
- [Docker](https://www.docker.com/)
- [GitHub Actions](https://github.com/features/actions)
- [Docker Hub](https://hub.docker.com/)
- [GitHub](https://github.com/)

## Contact

Provide contact information for project maintainers or contributors, such as email addresses or links to social media profiles.

- Project Maintainer: [Michael Kifle Teferra](mailto:michaelktd7@gmail.com) | [MIKEINTOSH SYSTEMS](mailto:mikeintoshsys@gmail.com) | [Telegram](https://t.me/mikeintosh)

## Repository Overview

This repository hosts the source code and configuration files for the PHP Dashboard Application. It is designed to be easily deployable using Docker, ensuring a consistent environment for running the application. The application leverages various services such as MySQL, PostgreSQL, MongoDB, and Metabase for data visualization.

### Key Components

1. **PHP Dashboard Application**:
   - Built using PHP 7.4 and Apache.
   - The main application files are located in the `/app`, `/backend`, `/src`, and other relevant directories.

2. **Docker Configuration**:
   - `Dockerfile`: Defines the base image, installs dependencies, and copies the application code into the container.
   - `docker-compose.yml`: Orchestrates multiple services including the PHP application, MySQL, PostgreSQL, MongoDB, Metabase, and administration tools like phpMyAdmin and pgAdmin.

3. **Submodules**:
   - Includes the `pm4core-docker` submodule from the external repository `https://github.com/ProcessMaker/pm4core-docker.git`.

4. **Configuration Files**:
   - Various configuration files for the application and services, such as `_config.yml`, `postgre.php`, and `php.ini` (located in the `config` folder).

### Directory Structure

- `/analytics`: Contains analytics-related data and scripts.
- `/app`: Core PHP application files.
- `/assets`: Static assets including images, stylesheets, and JavaScript files.
- `/backend`: Backend PHP scripts for handling server-side logic.
- `/dist`: Compiled distribution files for the frontend.
- `/help`: Documentation and help files for users.
- `/map_files`: Files related to mapping functionalities.
- `/src`: Source code for the application.
- `/styles`: CSS stylesheets.
- `/test`: Test scripts and files.
- `/config`: Configuration files for PHP and other services.

### Docker Services

- **PHP Application**:
  - Uses the image `mikeintosh/mikeintosh-phpdashboard-app:latest`.
  - Exposes port 8080 for web access.

- **MySQL**:
  - Database service for the application.
  - Exposes the default MySQL port 3306.

- **PostgreSQL**:
  - Used by Metabase for data storage and management.
  - Exposes the default PostgreSQL port 5432.

- **MongoDB**:
  - NoSQL database service.
  - Exposes the default MongoDB port 27017.

- **Metabase**:
  - Visualization tool for creating dashboards and reports.
  - Exposes port 4000 for web access.

- **phpMyAdmin**:
  - Web-based MySQL administration tool.
  - Exposes port 3307.

- **pgAdmin**:
  - Web-based PostgreSQL administration tool.
  - Exposes port 5434.

- **Mongo Express**:
  - Web-based MongoDB administration tool.
  - Exposes port 8081.

### Workflow Automation

- **GitHub Actions**:
  - Automates the build and deployment process using the `docker-build-and-deploy.yml` workflow file.
  - On push to the `main` branch, the workflow builds and pushes the Docker image to Docker Hub, then deploys the updated container.

### Usage

1. Clone the repository:
   ```
   git clone --recurse-submodules https://github.com/MIKEINTOSHSYSTEMS/mikeintoshaiodashboard.git
   ```

2. Build and run the Docker containers:
   ```
   docker-compose up -d
   ```

3. Access the application at `http://localhost:8080`.

4. Access phpMyAdmin at `http://localhost:3307`.

5. Access pgAdmin at `http://localhost:5434`.

6. Access Mongo Express at `http://localhost:8081`.

### Contributing

Contributions are welcome! If you'd like to contribute, please follow the guidelines in the main README section.

### License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
