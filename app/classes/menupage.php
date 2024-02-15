<?php
class MenuPage extends RunnerPage
{
	/**
	 * @constructor
	 */ 
	function __construct(&$params)
	{
		parent::__construct($params);
	}
	
	public function process()
	{
		//	Before Process event
		global $globalEvents;
		
		if( $globalEvents->exists("BeforeProcessMenu") )
			$globalEvents->BeforeProcessMenu( $this );


		// get redirect location for menu page
		$redirect = $this->getRedirectForMenuPage();
		if( $redirect )
		{
			header("Location: ".$redirect); 
			exit();
			return;
		}		
		
		$this->commonAssign();
		$this->doCommonAssignments();
			
		if( $this->isPD() )	
			$this->hideWelcomeItemsIfEmpty( $this->pSet->welcomeItems() );
		
		
		$this->addButtonHandlers();
		$this->addCommonJs();
		
		$this->displayMenuPage();
	}

	/**
	 * Get redirect location for menu page
	 * @return {string}
	 * @intellisense
	 */
	function getRedirectForMenuPage()
	{
		if($this->isShowMenu())
			return '';

		$redirect = '';
		$menuNodes = $this->getMenuNodes();
		for($i=0;$i<count($menuNodes);$i++)
		{
			if($menuNodes[$i]["linkType"] == "Internal")
			{
				if($this->isUserHaveTablePerm($menuNodes[$i]["table"], $menuNodes[$i]["pageType"]))
				{
					$type = $this->getPermisType($menuNodes[$i]['pageType']);
					if($type == "A")
						$redirect = "add";
					if($type == "E")
						$redirect = "edit";
					elseif($menuNodes[$i]["pageType"] == "list" && $type == "S")
						$redirect = "list";
					elseif($menuNodes[$i]["pageType"] == "report" && $type == "S")
						$redirect = "report";
					elseif($menuNodes[$i]["pageType"] == "chart" && $type == "S")
						$redirect = "chart";
					elseif($menuNodes[$i]["pageType"] == "view" && $type == "S")
						$redirect = "view";
					elseif($menuNodes[$i]["pageType"] == "dashboard" && $type == "S")
						$redirect = "dashboard";
					$redirect = GetTableLink(GetTableURL($menuNodes[$i]["table"]), $redirect);
				}
			}
		}
		if($this->isDynamicPerm && IsAdmin())
			$redirect = GetTableLink("admin_rights", "list");

		if($this->isAddWebRep)
			$redirect = GetTableLink("webreport");

		return $redirect;
	}	
	
	/**
	 * Assign basic page's xt variables
	 */
	protected function doCommonAssignments()
	{
		$this->setLangParams();

		$this->xt->assign("id", $this->id);
		$this->xt->assign("menu_block", true);
		

		$this->assignBody();
	}
	
	/**
	 * TODO: move to MenuPage class
	 * @param Array itemsData
	 * @return Boolean
	 */
	function hideWelcomeItemsIfEmpty( $itemsData ) 
	{
		$hide = true;
		foreach( $itemsData as $itemId => $itemData )
		{
			if ( !$itemData['menutItem'] )
			{
				// non welcome item eg button
				$hide = false;
				continue;
			}
			
			if ( !$itemData['group'] ) 
			{
				// item is welcome item
				if ( $itemData["table"] && $itemData["page"] ) 
				{
					if ( $this->isUserHaveTablePerm( $itemData["table"], $itemData["page"] ) ) 
						$hide = false;
					else
						$this->xt->displayItemHidden( $itemId );
				}
				continue;
			}
			
			// item is welcome group
			if ( !$this->hideWelcomeGroupIfEmpty( $itemId, $itemData ) ) 
				$hide = false;
		}

		return $hide;
	}
	
	
	/**
	 * TODO: move to MenuPage class	
	 * @param String grId
	 * @param Array grData
	 * @return Boolean
	 */
	function hideWelcomeGroupIfEmpty( $grId, $grData ) 
	{	
		if ( !$grData['items'] || count( $grData['items'] ) < 1 )
		{
			$this->xt->displayItemHidden( $grId );
			return true;
		}
		
		$hide = $this->hideWelcomeItemsIfEmpty( $grData['items'] );
		
		if ( $hide ) 
			$this->xt->displayItemHidden( $grId );
		
		return $hide;
	}
	
	function displayMenuPage()
	{
		global $globalEvents;
		$templatefile = $this->templatefile;

		if( $globalEvents->exists("BeforeShowMenu") )
			$globalEvents->BeforeShowMenu( $this->xt, $templatefile, $this );
		
		$this->display( $templatefile );		
	}
}
?>