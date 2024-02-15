<?php

class DataSourceProjectTable extends DataSourceTable {

	protected $query;
	protected $cipherer;
	function __construct( $name, $pSet, $connection ) {

		parent::__construct( $name, $connection );

		$this->query = $pSet->getSQLQuery();
		$this->pSet = $pSet;
		$this->cipherer = new RunnerCipherer( $this->_name );
	}

	protected function getKeyFields() {
		return $this->pSet->getTableKeys();
	}

	protected function getGroupByFieldList() {
		return $this->pSet->getListOfFieldsByExprType( true );
	}

	protected function getFieldType( $field ) {
		return $this->pSet->getFieldType( $field );
	}

	protected function getSQLComponents() {
		return $this->query->getSqlComponents();
	}

	/**
	 * Whether the column is COUNT, SUM, MIN, MAX, AVG in the original SQL query
	 * @return Boolean
	 */
	protected function isAggregateField( $field ) {
		return $this->pSet->isAggregateField( $field );
	}

	/**
	 * @return Boolean
	 * field is encrypted with code-based cipher
	 */
	protected function valueNeedsEncrypted( $field ) {
		return $this->connection->isEncryptionByPHPEnabled() && $this->cipherer->isFieldEncrypted( $field );
	}

	/**
	 * Returns expression to use in SQL query
	 */
	protected function fieldExpression( $field, $modifier = 0 ) {
		$fieldExpr = RunnerPage::_getFieldSQL( $field, $this->connection, $this->pSet );
		if( $this->cipherer->isFieldEncrypted( $field ) && !$this->connection->isEncryptionByPHPEnabled() ) {
				$fieldExpr = $this->cipherer->GetEncryptedFieldName( $fieldExpr, $field );
		}
		return $this->applyFieldModifier( $fieldExpr, $this->getFieldType($field), $modifier );
	}

	protected function dbTableName() {
		return $this->pSet->getOriginalTableName();
	}

	/**
	 * Update single record
	 * @return Array or false
	 */
	public function insertSingle( $dc ) {
		$this->prepareInsertValues( $dc );

		$table = $this->dbTableName();
		$fields = array();
		$values = array();

		foreach( $dc->_cache["sqlValues"] as $sf => $sv ) {
			$fields[] = $sf;
			$values[] = $sv;
		}

		$sql = "INSERT INTO "
			. $this->connection->addTableWrappers( $table )
			. "(" .implode( ", ", $fields ). ")"
			. " VALUES "
			. "(" .implode( ", ", $values ). ")";

		if( $this->connection->execWithBlobProcessing( $sql, $dc->_cache["blobs"], $dc->_cache["blobTypes"] ) ) {
			$data = $dc->values;

			foreach( $this->getKeyFields() as $keyField ) {
				if( !array_key_exists( $keyField, $data ) && $this->pSet->isAutoincField( $keyField ) )
					$data[ $keyField ] = $this->connection->getInsertedId( $keyField, $table, $this->pSet->getOraSequenceName( $keyField ) );
			}

			return $data;
		}

		$this->setError( $this->connection->lastError() );
		return false;
	}


	/**
	 * Returns SQL substitution if the field is BLOB and needs special processing.
	 */
	protected function prepareBlob( $field, &$values, &$blobs, &$blobTypes ) {
		if( !IsBinaryType( $this->getFieldType( $field ) ) )
			return false;

		global $projectLanguage;

		if( $projectLanguage == "php" ) {
			if( $this->connection->dbType == nDATABASE_Oracle
				|| $this->connection->dbType == nDATABASE_DB2
				|| $this->connection->dbType == nDATABASE_Informix ) {

				$blobKey = $field;
				if( $this->connection->dbType == nDATABASE_Oracle ) {
					$blobKey = $this->getUpdateFieldSQL( $field );
				}
				$blobs[ $blobKey ] = $values[ $field ];
				$blobTypes[ $blobKey ] = $this->getFieldType( $field );

				$blobExpression = $this->connection->dbType == nDATABASE_Oracle
					? "EMPTY_BLOB()"
					: "?";
				$values[ $field ] = $blobExpression;
				return true;
			}
		} else if( $projectLanguage == "aspx" ) {
			if( $this->connection->dbType == nDATABASE_Oracle
				|| $this->connection->dbType == nDATABASE_SQLite3 ) {

				$blobKey = "bnd" . ( count( $blobs ) + 1 );
				$blobs[ $blobKey ] = $values[ $field ];
				$blobTypes[ $blobKey ] = $this->getFieldType( $field );

				$blobExpression = $this->connection->dbType == nDATABASE_Oracle
					? ":" . $blobKey
					: "@" . $blobKey;
				$values[ $field ] = $blobExpression;
				return true;
			}
		} else {
			//	nothing for ASP?
		}
		return false;
	}

	public function updateMany( $keys, $values ) {

	}

	protected function getUpdateFieldSQL($field)
	{
		$strField = $this->pSet->getStrField($field);

		if( $strField != "" )
			return $this->connection->addFieldWrappers( $strField );

		$fname = $this->pSet->getFullFieldName($field);
		if ( $fname == "" )
			return $this->connection->addFieldWrappers($field);

		if (!$this->pSet->isSQLExpression($field))
			return $this->connection->addTableWrappers( $this->pSet->getStrOriginalTableName() ).".".$this->connection->addFieldWrappers( $fname );
		return $fname;
	}

	/**
	 * save prepared SQL parts into
	 * $dc->_cache["sqlValues"]
	 * $dc->_cache["blobs"]
	 * $dc->_cache["blobTypes"]
	 */
	protected function prepareInsertValues( $dc ) {
		$values = $dc->values;
		$sqlValues = array();
		$blobs = array();
		$blobTypes = array();
		foreach( $values as $field => $value)
		{
			$sqlField = $this->getUpdateFieldSQL( $field );
			if ( $this->pSet->insertNull( $field ) && trim( $value ) === "" )
			{
				$sqlValues[ $sqlField ] = "NULL";
			} else if( $this->prepareBlob( $field, $values, $blobs, $blobTypes ) ) {
				$sqlValues[ $sqlField ] = $values[ $field ];
			} else
			{
				$sqlValues[ $sqlField ] = $this->cipherer->AddDBQuotes( $field, $value );
			}
		}
		$dc->_cache["sqlValues"] = &$sqlValues;
		$dc->_cache["blobs"] = &$blobs;
		$dc->_cache["blobTypes"] = &$blobTypes;
	}

	/**
	 * Update single record
	 * @return Boolean - success or not
	 */
	public function updateSingle( $dc ) {
		if( !count($dc->values) || !count($dc->keys) )
			return true;

		$this->prepareInsertValues( $dc );
		$table = $this->dbTableName();
		$where = $this->getWhereClause( $dc );

		$fieldList = array();
		foreach( $dc->_cache["sqlValues"] as $sf => $sv ) {
			$fieldList[] = $sf . '=' . $sv;
		}

		$sql = " UPDATE "
			. $this->connection->addTableWrappers( $table )
			. " SET "
			. implode( ",\n ", $fieldList )
			. " WHERE "
			. $where;

		if( $this->connection->execWithBlobProcessing( $sql, $dc->_cache["blobs"], $dc->_cache["blobTypes"] ) ) {
			return true;
		}
		$this->setError( $this->connection->lastError() );
		return false;
	}

	/**
	 * Delete single record
	 * @return Boolean - success or not
	 */
	public function deleteSingle( $dc ) {

		if( !count($dc->keys) )
			return true;
		$table = $this->dbTableName();
		$where = $this->getWhereClause( $dc );


		$sql = " DELETE FROM "
			. $this->connection->addTableWrappers( $table )
			. " WHERE "
			. $where;

		if( $this->connection->exec( $sql )) {
			return true;
		}
		$this->setError( $this->connection->lastError() );
		return false;
	}


	public function lastAutoincValue( $field ) {
		$table = $this->dbTableName();
		if( $this->pSet->isAutoincField( $field ) ) {
			$oraSequenceName = $this->pSet->getOraSequenceName( $field );
			return $this->connection->getInsertedId( $field, $table, $oraSequenceName );
		}
		return "";
	}


}


?>