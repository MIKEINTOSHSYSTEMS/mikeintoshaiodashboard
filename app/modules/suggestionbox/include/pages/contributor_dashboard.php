<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'loginform_login',
'username_button' ),
'top' => array( 'sgb_contributor_header' ),
'grid' => array( 'contributor_snippet',
'sgb_users_suggestions_list',
'sgb_users_comments_list' ) ),
'formXtTags' => array(  ),
'itemForms' => array( 'logo' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'sgb_contributor_header' => 'top',
'contributor_snippet' => 'grid',
'sgb_users_suggestions_list' => 'grid',
'sgb_users_comments_list' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'username_button' => 3,
'loginform_login' => 3 ) ),
'itemsByType' => array( 'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'logo' => array( 'logo' ),
'username_button' => array( 'username_button' ),
'snippet' => array( 'sgb_contributor_header' ),
'loginform_login' => array( 'loginform_login' ),
'dashboard-item' => array( 'sgb_users_suggestions_list',
'sgb_users_comments_list',
'contributor_snippet' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'dashboard',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dashboard' => array( 'elements' => array( array( 'item' => array( 'type' => 'dashboard-item',
'table' => 'contributor',
'dashType' => 7,
'reloadInterval' => 0,
'pageId' => '',
'detailsFilterByMaster' => false,
'detailsMasterTable' => '',
'dashName' => 'contributor_snippet',
'bsStyle' => 'primary',
'panelType' => 1,
'icon' => array( 'glyph' => 'star-empty' ),
'viewTab' => true,
'editTab' => true,
'addTab' => true,
'initialTab' => 0,
'hiddenDetails' => array(  ),
'detailsOptions' => array(  ),
'mapUpdateGridWhenMoved' => true,
'eventId' => 'contributor_snippet' ),
'elementName' => 'contributor_snippet',
'table' => 'contributor',
'pageName' => '',
'type' => 7,
'reload' => 0,
'tabsPageTypes' => array(  ),
'pageNames' => array(  ),
'initialTabPageType' => 'view',
'notUsedDetailTables' => array(  ),
'details' => array(  ),
'zoom' => 'undefined',
'updateMoved' => true,
'snippetId' => 'contributor_snippet',
'masterTable' => '',
'tabLocation' => 'above',
'panelStyle' => 'primary' ),
array( 'item' => array( 'type' => 'dashboard-item',
'table' => 'sgb_users_suggestions',
'dashType' => 0,
'reloadInterval' => 0,
'pageId' => '',
'detailsFilterByMaster' => false,
'detailsMasterTable' => '',
'dashName' => 'sgb_users_suggestions_list',
'bsStyle' => 'primary',
'panelType' => 1,
'icon' => array( 'fa' => 'bookmark' ),
'viewTab' => true,
'editTab' => true,
'addTab' => true,
'initialTab' => 0,
'hiddenDetails' => array(  ),
'detailsOptions' => array(  ),
'mapUpdateGridWhenMoved' => true,
'addRecord' => false,
'editRecord' => false,
'viewRecord' => false,
'inlineAdd' => false,
'inlineEdit' => false,
'copyRecord' => false,
'deleteRecords' => false,
'updateSelected' => false ),
'elementName' => 'sgb_users_suggestions_list',
'table' => 'sgb_users_suggestions',
'pageName' => '',
'type' => 0,
'reload' => 0,
'tabsPageTypes' => array(  ),
'pageNames' => array(  ),
'initialTabPageType' => 'view',
'inlineAdd' => false,
'inlineEdit' => false,
'deleteRecord' => false,
'copy' => false,
'popupAdd' => false,
'popupEdit' => false,
'popupView' => false,
'updateSelected' => false,
'notUsedDetailTables' => array(  ),
'details' => array(  ),
'zoom' => 'undefined',
'updateMoved' => true,
'masterTable' => '',
'tabLocation' => 'above',
'panelStyle' => 'primary' ),
array( 'item' => array( 'type' => 'dashboard-item',
'table' => 'sgb_users_comments',
'dashType' => 0,
'reloadInterval' => 0,
'pageId' => '',
'detailsFilterByMaster' => false,
'detailsMasterTable' => '',
'dashName' => 'sgb_users_comments_list',
'bsStyle' => 'primary',
'panelType' => 1,
'icon' => array( 'glyph' => 'flash' ),
'viewTab' => true,
'editTab' => true,
'addTab' => true,
'initialTab' => 0,
'hiddenDetails' => array(  ),
'detailsOptions' => array(  ),
'mapUpdateGridWhenMoved' => true,
'addRecord' => false,
'editRecord' => false,
'viewRecord' => false,
'inlineAdd' => false,
'inlineEdit' => false,
'copyRecord' => false,
'deleteRecords' => false,
'updateSelected' => false ),
'elementName' => 'sgb_users_comments_list',
'table' => 'sgb_users_comments',
'pageName' => '',
'type' => 0,
'reload' => 0,
'tabsPageTypes' => array(  ),
'pageNames' => array(  ),
'initialTabPageType' => 'view',
'inlineAdd' => false,
'inlineEdit' => false,
'deleteRecord' => false,
'copy' => false,
'popupAdd' => false,
'popupEdit' => false,
'popupView' => false,
'updateSelected' => false,
'notUsedDetailTables' => array(  ),
'details' => array(  ),
'zoom' => 'undefined',
'updateMoved' => true,
'masterTable' => '',
'tabLocation' => 'above',
'panelStyle' => 'primary' ) ) ),
'dashSearch' => array( 'searchFields' => array( 'sgb_users_suggestions_id' => array( array( 'field' => 'id',
'table' => 'sgb_users_suggestions' ) ),
'sgb_users_suggestions_title' => array( array( 'field' => 'title',
'table' => 'sgb_users_suggestions' ) ),
'sgb_users_suggestions_name' => array( array( 'field' => 'name',
'table' => 'sgb_users_suggestions' ) ),
'sgb_users_suggestions_email' => array( array( 'field' => 'email',
'table' => 'sgb_users_suggestions' ) ),
'sgb_users_suggestions_ip' => array( array( 'field' => 'ip',
'table' => 'sgb_users_suggestions' ) ) ),
'allSearchFields' => array( 'sgb_users_suggestions_id',
'sgb_users_suggestions_title',
'sgb_users_suggestions_name',
'sgb_users_suggestions_email',
'sgb_users_suggestions_ip' ),
'googleLikeFields' => array( 'sgb_users_suggestions_id',
'sgb_users_suggestions_title',
'sgb_users_suggestions_name',
'sgb_users_suggestions_email',
'sgb_users_suggestions_ip' ) ) );
			$pageArray = array( 'id' => 'dashboard',
'type' => 'dashboard',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'topbar-dashboard',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'dashboard-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'sgb_contributor_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'dashboard-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'cell_0_0',
'colspan' => 1,
'rowspan' => 1 ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_1_0',
'colspan' => 1,
'rowspan' => 1 ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_2_0',
'colspan' => 1,
'rowspan' => 1 ) ) ) ),
'cells' => array( 'cell_0_0' => array( 'model' => 'c1',
'items' => array( 'contributor_snippet' ) ),
'cell_1_0' => array( 'model' => 'c1',
'items' => array( 'sgb_users_suggestions_list' ) ),
'cell_2_0' => array( 'model' => 'c1',
'items' => array( 'sgb_users_comments_list' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'logo' => array( 'type' => 'logo' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'changepassword_link' ) ),
'sgb_contributor_header' => array( 'eventId' => 'sgb_contributor_header',
'label' => array( 'text' => 'sgb_contributor_header',
'type' => 0 ),
'type' => 'snippet' ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'sgb_users_suggestions_list' => array( 'type' => 'dashboard-item',
'table' => 'sgb_users_suggestions',
'dashType' => 0,
'reloadInterval' => 0,
'pageId' => '',
'detailsFilterByMaster' => false,
'detailsMasterTable' => '',
'dashName' => 'sgb_users_suggestions_list',
'bsStyle' => 'primary',
'panelType' => 1,
'icon' => array( 'fa' => 'bookmark' ),
'viewTab' => true,
'editTab' => true,
'addTab' => true,
'initialTab' => 0,
'hiddenDetails' => array(  ),
'detailsOptions' => array(  ),
'mapUpdateGridWhenMoved' => true,
'addRecord' => false,
'editRecord' => false,
'viewRecord' => false,
'inlineAdd' => false,
'inlineEdit' => false,
'copyRecord' => false,
'deleteRecords' => false,
'updateSelected' => false ),
'sgb_users_comments_list' => array( 'type' => 'dashboard-item',
'table' => 'sgb_users_comments',
'dashType' => 0,
'reloadInterval' => 0,
'pageId' => '',
'detailsFilterByMaster' => false,
'detailsMasterTable' => '',
'dashName' => 'sgb_users_comments_list',
'bsStyle' => 'primary',
'panelType' => 1,
'icon' => array( 'glyph' => 'flash' ),
'viewTab' => true,
'editTab' => true,
'addTab' => true,
'initialTab' => 0,
'hiddenDetails' => array(  ),
'detailsOptions' => array(  ),
'mapUpdateGridWhenMoved' => true,
'addRecord' => false,
'editRecord' => false,
'viewRecord' => false,
'inlineAdd' => false,
'inlineEdit' => false,
'copyRecord' => false,
'deleteRecords' => false,
'updateSelected' => false ),
'contributor_snippet' => array( 'type' => 'dashboard-item',
'table' => 'contributor',
'dashType' => 7,
'reloadInterval' => 0,
'pageId' => '',
'detailsFilterByMaster' => false,
'detailsMasterTable' => '',
'dashName' => 'contributor_snippet',
'bsStyle' => 'primary',
'panelType' => 1,
'icon' => array( 'glyph' => 'star-empty' ),
'viewTab' => true,
'editTab' => true,
'addTab' => true,
'initialTab' => 0,
'hiddenDetails' => array(  ),
'detailsOptions' => array(  ),
'mapUpdateGridWhenMoved' => true,
'eventId' => 'contributor_snippet' ) ),
'dbProps' => array(  ),
'version' => 11,
'pageAlign' => 'center',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>