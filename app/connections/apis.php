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

		$this->_connectionsData = &$connectionsData;
	}

	public function getConnection( $id ) {
		return new RestConnection( $this->_connectionsData[ $id ] );
	}


}


?>