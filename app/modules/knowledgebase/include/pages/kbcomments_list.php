<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => true,
'inlineEdit' => false,
'spreadsheetMode' => false,
'addToBottom' => false,
'delete' => false,
'updateSelected' => false,
'addInPopup' => null,
'editInPopup' => null,
'viewInPopup' => null,
'clickSort' => false,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'master' => array( 'main' => array( 'preview' => true ),
'kbarticles' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'name' => array( 'totalsType' => '' ),
'moderated' => array( 'totalsType' => '' ),
'created_date' => array( 'totalsType' => '' ),
'ArticleID' => array( 'totalsType' => '' ),
'comment' => array( 'totalsType' => '' ),
'CommentID' => array( 'totalsType' => '' ),
'email' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'name',
'email',
'comment',
'created_date' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'ArticleID',
'moderated',
'created_date',
'name',
'email',
'comment',
'CommentID' ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'comment' => array( 'simple_grid_field2' ),
'name' => array( 'grid_field' ),
'email' => array( 'grid_field1' ),
'created_date' => array( 'grid_field2' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'left' => array( 'search_panel' ),
'top' => array( 'breadcrumb',
'master_info' ),
'above-grid' => array( 'inline_add',
'details_found',
'page_size' ),
'below-grid' => array( 'pagination' ),
'grid' => array( 'grid_field',
'grid_field1',
'simple_grid_field2',
'grid_field2',
'grid_inline_cancel' ) ),
'formXtTags' => array( 'top' => array( 'breadcrumb',
'mastertable_block' ),
'above-grid' => array( 'inlineadd_link',
'details_found',
'recsPerPage' ),
'below-grid' => array( 'pagination' ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'search_panel' => 'left',
'breadcrumb' => 'top',
'master_info' => 'top',
'inline_add' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'pagination' => 'below-grid',
'grid_field' => 'grid',
'grid_field1' => 'grid',
'simple_grid_field2' => 'grid',
'grid_field2' => 'grid',
'grid_inline_cancel' => 'grid' ),
'itemLocations' => array( 'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ) ),
'itemVisiblity' => array( 'menu' => 3,
'simple_search' => 3,
'search_panel' => 5,
'list_options' => 3,
'loginform_login' => 3,
'username_button' => 3 ) ),
'itemsByType' => array( 'details_found' => array( 'details_found' ),
'page_size' => array( 'page_size' ),
'pagination' => array( 'pagination' ),
'grid_field' => array( 'simple_grid_field2',
'grid_field',
'grid_field1',
'grid_field2' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2',
'search_panel_field1',
'search_panel_field5',
'search_panel_field6' ),
'-' => array( '-3',
'-1',
'-2',
'-',
'-4' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'logout_link' => array( 'logout_link' ),
'breadcrumb' => array( 'breadcrumb' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'logo' => array( 'logo' ),
'loginform_login' => array( 'loginform_login' ),
'username_button' => array( 'username_button' ),
'master_info' => array( 'master_info' ),
'userinfo_link' => array( 'userinfo_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'inline_cancel' ),
'items' => array( 'grid_inline_cancel' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'name_fieldcolumn',
'email_fieldcolumn',
'comment_fieldcolumn',
'created_date_fieldcolumn' ),
'items' => array( 'grid_field',
'grid_field1',
'simple_grid_field2',
'grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo',
'menu' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'list-vbar',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'search_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'breadcrumb' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c3' => array( 'model' => 'c3',
'items' => array( 'master_info' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'inline_add' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_field3',
'colspan' => 1 ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_field1',
'colspan' => 1 ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_field',
'colspan' => 1 ) ) ) ),
'cells' => array( 'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'grid_field',
'grid_field1',
'simple_grid_field2',
'grid_field2' ),
'field' => 'name',
'columnName' => 'field' ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array(  ) ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ) ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_inline_cancel' ) ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'details_found' => array( 'type' => 'details_found' ),
'page_size' => array( 'type' => 'page_size' ),
'pagination' => array( 'type' => 'pagination' ),
'simple_grid_field2' => array( 'field' => 'comment',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'search_panel_field' => array( 'field' => 'ArticleID',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field4' => array( 'field' => 'email',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field3' => array( 'field' => 'comment',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field2' => array( 'field' => 'name',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field1' => array( 'field' => 'CommentID',
'type' => 'search_panel_field',
'required' => false ),
'-3' => array( 'type' => '-' ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'-1' => array( 'type' => '-' ),
'-2' => array( 'type' => '-' ),
'logout_link' => array( 'type' => 'logout_link' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field5',
'search_panel_field6',
'search_panel_field2',
'search_panel_field4',
'search_panel_field3',
'search_panel_field1' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'show_search_panel',
'hide_search_panel' ) ),
'-' => array( 'type' => '-' ),
'logo' => array( 'type' => 'logo' ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'changepassword_link' ) ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'main' => 'true',
'kbarticles' => 'true' ) ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'grid_field' => array( 'field' => 'name',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field1' => array( 'field' => 'email',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'search_panel_field5' => array( 'field' => 'moderated',
'type' => 'search_panel_field' ),
'grid_field2' => array( 'field' => 'created_date',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'search_panel_field6' => array( 'field' => 'created_date',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'-4' => array( 'type' => '-' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>