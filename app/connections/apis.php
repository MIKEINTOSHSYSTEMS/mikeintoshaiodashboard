<?php
require_once( getabspath('connections/rest.php') );

class RestManager
{
	protected $_tablesConnectionIds;
	protected $_connectionsData;
	protected $_connectionsIdByName = array();

	function __construct()
	{
		$this->_setConnectionsData();
//		$this->_setTablesConnectionIds();
	}

	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$this->_tablesConnectionIds = &$connectionsIds;
	}

	protected function _setConnectionsData()
	{
		// content of this function can be modified on demo account
		// variable names $data and $connectionsData are important

		$connectionsData = array();

		$data = array();
		$data["connId"] = "deredevatderejadevmerqconsulta";
		$data["connName"] = "ListFormSubmissioins";

		$this->_connectionsIdByName["ListFormSubmissioins"] = "deredevatderejadevmerqconsulta";

		$data["url"] = "https://derejadev.merqconsultancy.org/backend/forms/api/v1";
		$data["authType"] = "api";
				$data["apiKey"] = "BlBh6jVCnHGS9YJnf_wmWCHrXBYiZJ35ehrQtNIk";
		$data["keyLocation"] = 1;
		$data["keyParameter"] = "X-Api-Key";
		
	$connectionsData["deredevatderejadevmerqconsulta"] = $data;
		$this->_connectionsData = &$connectionsData;
	}

	public function getConnection( $id ) {
		if( $id == spidGOOGLEDRIVE ) {
			return getGoogleDriveConnection();
		}
		if( $id == spidONEDRIVE ) {
			return getOneDriveConnection();
		}
		if( $id == spidDROPBOX ) {
			return getDropboxConnection();
		}
		if( !$this->_connectionsData[$id] ) {
			return null;
		}
		return new RestConnection( $this->_connectionsData[ $id ] );
	}

	public function idByName( $name ) {
		foreach( $this->_connectionsData as $id => $data ) {
			if( $data["connName"] == $name ) {
				return $id;
			}
		}
		
		//	return first available
		foreach( $this->_connectionsData as $id => $data ) {
			return $id;
		}

	}


}


?>