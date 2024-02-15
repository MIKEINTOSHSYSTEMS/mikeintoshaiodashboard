<?php 

class DataSourceDbTable extends DataSourceTable {

	protected $tableInfo;
	function __construct( $name, $connection, &$tableInfo ) {

		parent::__construct( $name, $connection );
		$this->tableInfo = &$tableInfo;
	}

	protected function getFieldType( $field ) {
		$fieldInfo = getArrayElementNC( $this->tableInfo["fields"], $field );
		return $fieldInfo["type"];
	}

	protected function getSQLComponents() {
		return array(
			"head" => "SELECT * ",
			"from" => "FROM " . $this->connection->addTableWrappers( $this->tableInfo["fullName"] ) . " ",
			"where" => "",
			"groupby" => "",
			"having" => ""
		);
	}

}

?>