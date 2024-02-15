<?php
class ViewLookupWizardField extends ViewControl
{
	public $nLookupType;
	public $lookupTable;
	public $displayFieldName;
	public $linkFieldName;
	public $linkAndDisplaySame;
	public $pSet;
	public $lookupPSet;
	public $cipherer;
	public $lookupQueryObj;
	public $displayFieldIndex;
	public $LookupSQL; // need to be removed
	public $resolvedLookupValues = array();
	public $resolvedLinkLookupValues = array();
	public $linkFieldIndex;

	public $localControlsContainer;


	/**
	* @type Connection
	*/
	protected $lookupConnection;

	protected $lookupDataSource;

	public function __construct($field, $container, $pageObject)
	{
		parent::__construct($field, $container, $pageObject);

		$this->lookupPSet = null;
		$this->cipherer = null;
//		$this->lookupQueryObj = null;
//		$this->displayFieldIndex = 0;
//		$this->linkFieldIndex = 1;
//		$this->LookupSQL = "";

		if($this->container->pSet->getEditFormat($field) != EDIT_FORMAT_LOOKUP_WIZARD)
		{
			$this->pSet = new ProjectSettings( $this->container->pSet->_table );
			//	set view page
			$this->pSet->setPageType( $this->container->pageType );
			//	set edit page
			$this->pSet->setPageType( $this->container->pSet->getPageTypeByFieldEditFormat($field, EDIT_FORMAT_LOOKUP_WIZARD) );
		}
		else
			$this->pSet = $this->container->pSet;

		$this->nLookupType = $this->pSet->getLookupType($this->field);
		$this->lookupTable = $this->pSet->getLookupTable($this->field);
		//$this->setLookupConnection();
		$this->lookupDataSource = getLookupDataSource( $this->field, $this->pSet );


		$this->displayFieldName = $this->pSet->getDisplayField($this->field);
		$this->linkFieldName = $this->pSet->getLinkField($this->field);
		$this->linkAndDisplaySame = $this->displayFieldName == $this->linkFieldName;
		if($this->nLookupType == LT_QUERY)
		{
			$this->lookupPSet = new ProjectSettings($this->lookupTable, $this->container->pageType);
			$this->cipherer = new RunnerCipherer($this->lookupTable);
			/*
			$this->lookupQueryObj = $this->lookupPSet->getSQLQuery()->CloneObject();
			if($this->pSet->getCustomDisplay($this->field))
				$this->lookupQueryObj->AddCustomExpression($this->displayFieldName, $this->lookupPSet, $this->pSet->_table, $this->field);
			$this->lookupQueryObj->ReplaceFieldsWithDummies($this->lookupPSet->getBinaryFieldsIndices());
			$lookupIndexes = GetLookupFieldsIndexes($this->pSet, $this->field);
			$this->displayFieldIndex = $lookupIndexes["displayFieldIndex"];
			$this->linkFieldIndex = $lookupIndexes["linkFieldIndex"];
			*/
		}
		else
		{
			$this->cipherer = new RunnerCipherer($this->pSet->_table);
/*
			$this->LookupSQL = "SELECT ";
			$this->LookupSQL.= RunnerPage::sqlFormattedDisplayField($this->field, $this->lookupConnection, $this->pSet);
			$this->LookupSQL.= ", ".$this->lookupConnection->addFieldWrappers($this->pSet->getLinkField($this->field));
			$this->LookupSQL.= " FROM ".$this->lookupConnection->addTableWrappers( $this->lookupTable )." WHERE ";
*/
		}

		$this->localControlsContainer = new ViewControlsContainer($this->pSet, $this->container->pageType, $pageObject);
		$this->localControlsContainer->isLocal = true;
	}

	/**
	 * Set the lookupConnection property
	 */
	protected function setLookupConnection()
	{
		global $cman;

		if( $this->nLookupType == LT_QUERY )
		{
			$this->lookupConnection = $cman->byTable( $this->lookupTable );
			return;
		}

		$connId = $this->pSet->getNotProjectLookupTableConnId( $this->field );
		$this->lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}

	/**
	 * @param String value
	 * @return String
	 */
	protected function getDbPreparedValuesList( $value )
	{
		if( !$this->pSet->multiSelect($this->field) )
			return "";

		$values = splitvalues($value);
		$type = $this->pSet->getLWLinkFieldType($this->field);

		$numeric = true;
		if(!$type)
		{
			foreach($values as $val)
			{
				if( strlen($val) && !is_numeric($val) )
				{
					$numeric = false;
					break;
				}
			}
		}
		else
			$numeric = !NeedQuotes($type);

		$listValues = array();
		foreach($values as $val)
		{
			if( $numeric && !strlen($val) )
				continue;

			if( $numeric )
				$listValues[] = ($val + 0);
			else
			{
				$fName = $this->nLookupType == LT_QUERY ? $this->linkFieldName : $this->field;
				$listValues[] = $this->lookupConnection->prepareString( $this->cipherer->EncryptField($fName, $val) );
			}
		}
		return implode(",", $listValues);
	}

	/**
	 * @param String value
	 * @param String in
	 * @return String
	 */
	protected function getMultiselectLookupResolvingSQL( $value, $in, $withoutWhere = false )
	{
		if( !$this->pSet->multiSelect($this->field) )
			return "";

		$where = prepareLookupWhere( $this->field, $this->pSet );

		if( $this->nLookupType == LT_QUERY )
		{
			$inWhere = RunnerPage::_getFieldSQLDecrypt( $this->linkFieldName, $this->lookupConnection, $this->lookupPSet, $this->cipherer )
				." in (".$in.")";
			if( !$withoutWhere && strlen($where) )
				$inWhere.=" and (".$where.")";

			$LookupSQL = $this->lookupQueryObj->buildSQL_default( $inWhere );
		}
		else
		{
			$LookupSQL = $this->LookupSQL.$this->lookupConnection->addFieldWrappers($this->pSet->getLinkField($this->field))." in (".$in.")";
			if( !$withoutWhere && strlen($where) )
				$LookupSQL.=" and (".$where.")";
		}

		return $LookupSQL;
	}

	/**
	 * @param Array values
	 * @param Boolean withoutWhere
	 * @return Array
	 * 	"command" => DsCommand
	 *  "displayAlias" => bname of display field column
	 */
	protected function getLookupCommand( $values, $withoutWhere ) {
		$dc = new DsCommand();
		$pSet = $this->pSet;

		//	custom display field
		$displayField = $pSet->getDisplayField( $this->field );
		if( $this->pSet->getCustomDisplay( $this->field ) ) {
			$displayFieldAlias = generateAlias();
			$dc->extraColumns[] = new DsFieldData( $displayField, $displayFieldAlias, "" );
		} else {
			$displayFieldAlias = $displayField;
		}

		//	filters
		$filters = array();

		//	select only current value
		$linkField = $pSet->getLinkField( $this->field );
		$multiselect = $pSet->multiSelect( $this->field );
		$valueConditions = array();
		foreach( $values as $v ) {
			$valueConditions[] = DataCondition::FieldEquals( $linkField , $v );
		}
		$filters[] = DataCondition::_Or( $valueConditions );

		//	user-provided WHERE expression
		if( !$withoutWhere )
		{
			$filters[] = DataCondition::SQLCondition( prepareLookupWhere( $this->field, $pSet ) );
		}

		//	security filter
		$filters[] = Security::SelectCondition( "S", $this->lookupPSet );

		$dc->filter = DataCondition::_And( $filters );
		return array( "command" => $dc, "displayAlias" => $displayFieldAlias );

	}


	/**
	 * @param String value
	 * @return String
	 */
/*
	 protected function getNotMultiselectLookupResolvingSQL( $value, $withoutWhere )
	{
		if( $this->pSet->multiSelect($this->field) )
			return "";

		$where = prepareLookupWhere( $this->field, $this->pSet );

		$strdata = $this->cipherer->MakeDBValue($this->nLookupType == LT_QUERY ? $this->linkFieldName : $this->field, $value, "", true);
		if( $this->nLookupType == LT_QUERY )
		{
			$strWhere = GetFullFieldName($this->linkFieldName, $this->lookupTable, false)." = " . $strdata;
			if( !$withoutWhere && strlen($where) )
				$strWhere.= " and (".$where.")";

			$LookupSQL = $this->lookupQueryObj->buildSQL_default( $strWhere );

		}
		else
		{
			$strWhere = $this->lookupConnection->addFieldWrappers($this->pSet->getLinkField($this->field))." = " . $strdata;
			if( !$withoutWhere && strlen($where) )
				$strWhere.= " and (".$where.")";

			$LookupSQL = $this->LookupSQL.$strWhere;
		}

		return $LookupSQL;
	}
*/
	/**
	 * @param String lookupValue
	 * @return String
	 */
	protected function getDecryptLookupValue( $lookupValue )
	{
		if( $this->nLookupType == LT_QUERY || $this->linkAndDisplaySame )
			return $this->cipherer->DecryptField($this->nLookupType == LT_QUERY ? $this->displayFieldName : $this->field, $lookupValue);

		return $lookupValue;
	}

	/**
	 * @param String value
	 * return Array
	 */
	protected function getMultiselectLookupValues( $value )
	{
		$in = $this->getDbPreparedValuesList( $value );
		if( !strlen($in) )
			return array( $value );

		if( count($this->resolvedLookupValues[ $value ]) )
			return $this->resolvedLookupValues[ $value ];

		$withoutWhere = false;
		for ( $i=0; $i<2; $i++ )
		{
			$LookupSQL = $this->getMultiselectLookupResolvingSQL($value, $in, $withoutWhere);
			LogInfo($LookupSQL);

			$lookupArr = array();
			$qResult = $this->lookupConnection->querySilent( $LookupSQL );
			if( !$qResult )
				continue;
			while( $lookuprow = $qResult->fetchNumeric() )
			{
				$displayValue = $lookuprow[ $this->displayFieldIndex ];
				$lookupArr[] = $displayValue;
				$this->resolvedLinkLookupValues[ $value ][ $displayValue ] = $lookuprow[ $this->linkFieldIndex ];
			}
			if ( count($lookupArr) == count(explode(',', $in)) ) break;
			$withoutWhere = true;
		}

		$lookupValues = array();
		$lookupArr = array_unique( $lookupArr );
		foreach($lookupArr as $lookupvalue)
		{
			$lookupValues[] = $this->getDecryptLookupValue( $lookupvalue );
		}

		if( count($lookupValues) )
			$this->resolvedLookupValues[ $value ] = $lookupValues;

		return $lookupValues;
	}

	/**
	 * @param String value
	 * return Array
	 */
	protected function getNotMultiselectLookupValues( $value )
	{
		if( isset( $this->resolvedLookupValues[ $value ] ) )
			return array( $this->resolvedLookupValues[ $value ] );

		$lookupvalue = $value;

		$withoutWhere = false;
		for ($i=0; $i<2; $i++)
		{
			$LookupSQL = $this->getNotMultiselectLookupResolvingSQL( $value, $withoutWhere );
			LogInfo($LookupSQL);

			$qResult = $this->lookupConnection->querySilent( $LookupSQL );
			if( !$qResult )
				continue;
			if( $lookuprow = $qResult->fetchNumeric() )
			{
				$lookupvalue = $this->getDecryptLookupValue( $lookuprow[ $this->displayFieldIndex ] );
				break;
			}
			$withoutWhere = true;
		}

		$this->resolvedLookupValues[ $value ] = $lookupvalue;

		return array( $lookupvalue );
	}

	/**
	 * @param String value
	 * @return Array of arrays"
	 * array( array( "link" => $value, "display" => $display ))
	 */
	protected function getLookupValues( $value )
	{
		if( $this->pSet->multiSelect($this->field) ) {
			$values = splitvalues($value);
		} else {
			$values = array( $value );
		}
		$ret = array();
		$unresolved = array();
		foreach( $values as $v ) {
			if( $this->resolvedLookupValues[ $v ] ) {
				$ret[] = array( "link" => $v, "display" => $this->resolvedLookupValues[ $v ] );
			} else {
				$unresolved[] = $v;
			}
		}

		//	resolve with user's WHERE expression
		if( $unresolved && $this->pSet->isLookupWhereSet( $this->field ) ) {
			$resolved = $this->fetchLookupValues( $unresolved, false );
			if( $resolved ) {
				foreach( $resolved as $r ) {
					$ret[] = $r;
					$this->resolvedLookupValues[ $r["link"] ] = $r[ "display" ];
				}
			}
			//	update unresolved values
			$values = $unresolved;
			$unresolved = array();
			foreach( $values as $v ) {
				if( !$this->resolvedLookupValues[ $v ] ) {
					$unresolved[] = $v;
				}
			}
		}

		//	repeat without user's WHERE expression
		if( $unresolved ) {
			$resolved = $this->fetchLookupValues( $unresolved, true );
			if( $resolved === false ) {
				showError( $this->lookupDataSource->lastError() );
			} else {
				foreach( $resolved as $r ) {
					$ret[] = $r;
					$this->resolvedLookupValues[ $r["link"] ] = $r[ "display" ];
				}
			}
		}
		return $ret;
	}

	/**
	 * @return Array of arrays
	 * array( array( "link" => $value, "display" => $display ))
	 */
	protected function fetchLookupValues( $values, $withoutWhere ) {
		$lookupCommand = $this->getLookupCommand( $values, $withoutWhere );
		$dc = $lookupCommand["command"];
		$dispAlias = $lookupCommand["displayAlias"];
		$rs = $this->lookupDataSource->getList( $dc );
		if( !$rs ) {
			showError( $this->lookupDataSource->lastError() );
			return false;
		}
		$ret = array();
		while( $data = $rs->fetchAssoc() ) {
			$ret[] = array(
				"link" => $data[ $this->linkFieldName ],
				"display" => $data[ $dispAlias ]
			);
		}
		return $ret;
	}

	/**
	 * @param &Array data
	 * @param String keylink
	 */
	public function showDBValue( &$data, $keylink, $html = true )
	{
		$value = $data[ $this->field ];
		if( !strlen($value) )
			return "";

		$outValues = array();
		$localData = $data;

		$lookupValues = $this->getLookupValues( $value );
		foreach( $lookupValues as $lv )
		{
			$linkValue = $lv["link"];
			$displayValue = $lv["display"];

			$this->localControlsContainer->linkFieldValues[ $this->field ] = $data[ $this->field ];
			$this->localControlsContainer->originlinkValues[ $this->field ] = $linkValue;


			if( $this->pSet->getViewFormat($this->field) != "Custom" )
				$localData[ $this->field ] = $displayValue;

			$outputValue = $this->localControlsContainer->showDBValue($this->field, $localData, $keylink, $displayValue );

			if( $html ) {
				$outputValue = '<span class="r-lookup-value">' . $outputValue . '</span>';
			}

			$outValues[] = $outputValue;
		}

		return implode('<span class="r-lookup-sep">,</span>', $outValues);
	}

	/**
	 * User API function
	 * @param &Array data
	 * @return String
	 */
	public function getTextValue(&$data)
	{
		$value = $data[ $this->field ];
		if( !strlen($value) )
			return "";

		$textValues = array();
		$localData = $data;

		$lookupValues = $this->getLookupValues( $value );
		foreach( $lookupValues as $lv )
		{
			$linkValue = $lv["link"];
			$displayValue = $lv["display"];
			if( $this->pSet->getViewFormat($this->field) != "Custom" )
				$localData[ $this->field ] = $displayValue;

			$textValues[] = $this->localControlsContainer->getControl( $this->field )->getTextValue( $localData );
		}

		return implode(",", $textValues);
	}

	/**
	 * Get the field's content that will be exported
	 * @prarm &Array data
	 * @prarm String keylink
	 * @return String
	 */
	public function getExportValue(&$data, $keylink = "")
	{
		$this->localControlsContainer->setForExportVar( $this->container->forExport );
		return $this->showDBValue($data, $keylink);
	}
}
?>