<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "deredevatderejadevmerqconsulta" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "deredevatderejadevmerqconsulta";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		$db = &Security::dbProvider();		
		if( $db ) {
			return $db["table"]["connId"];
		}
		return "";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->byId( "deredevatderejadevmerqconsulta" );
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->byId( "deredevatderejadevmerqconsulta" );
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "deredevatderejadevmerqconsulta";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "deredevatderejadevmerqconsulta";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "deredevatderejadevmerqconsulta";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["events"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["trainings"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["candidates"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["event_participants"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["training_participants"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["cities"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["regions"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["sub_cities"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["zones"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["dereja_services"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["dereja_event_services"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["dereja_training_services"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["institution_types"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["departments"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["education_levels"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["minor_major"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["skills"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["dereja_information_sources"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["it_related_skills"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["industry_specific_skills"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["training_types"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["professions"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["participant_organization_types"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["training_venues"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["training_organizers"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["training_city_towns"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["program_areas"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["Candidate_Employment_Tracker"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["Companies"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["Jobs"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["Job_Categories"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["Job_Types"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["CompanySectors"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["Disability_Types"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["Trainer"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["admin_rights"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["admin_members"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["webreports"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["webreport_style"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["webreport_sql"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["webreport_admin"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["webreports_view"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["Languages"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["website_data"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["Job_Fair"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["kbarticles"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["kbcategories"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["kbcomments"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["kbusers"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["main"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["faicons"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["admin_comments"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["derejame_audit"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["dashboard_pages"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["dashboards"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["candidates_view"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["event_participants_view"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["training_participants_view"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["candidates_by_region"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["event_participants_by_events"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["training_participants_by_trainings"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["candidates_reports"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["candidates_by_gender"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["users"] = "deredevatderejadevmerqconsulta";
		$connectionsIds["admin_users"] = "deredevatderejadevmerqconsulta";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>