<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => false,
'inlineEdit' => false,
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
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => false,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'id' => array( 'totalsType' => '' ),
'icon' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'icon',
'id' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'filterFields' => array(  ),
'inlineAddFields' => array( 'icon' ),
'inlineEditFields' => array( 'icon' ),
'fieldItems' => array( 'icon' => array( 'simple_grid_field1' ),
'id' => array( 'grid_field' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'simple_search',
'details_found',
'page_size' ),
'below-grid' => array( 'pagination' ),
'left' => array( 'logo',
'expand_button',
'menu' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'list_options',
'notifications',
'loginform_login',
'username_button' ),
'grid' => array( 'grid_checkbox',
'simple_grid_field1',
'grid_field' ),
'top' => array(  ) ),
'formXtTags' => array( 'below-grid' => array( 'pagination' ),
'top' => array(  ) ),
'itemForms' => array( 'simple_search' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'list_options' => 'supertop',
'notifications' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'grid_checkbox' => 'grid',
'simple_grid_field1' => 'grid',
'grid_field' => 'grid' ),
'itemLocations' => array( 'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_label' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ) ),
'itemVisiblity' => array( 'expand_menu_button' => 2,
'expand_button' => 5 ) ),
'itemsByType' => array( 'simple_search' => array( 'simple_search' ),
'details_found' => array( 'details_found' ),
'page_size' => array( 'page_size' ),
'pagination' => array( 'pagination' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_field' => array( 'simple_grid_field1',
'grid_field' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'changepassword_link' => array( 'changepassword_link' ),
'list_options' => array( 'list_options' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'username_button' => array( 'username_button' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'notifications' => array( 'notifications' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'cell_top' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'icon_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array( 'id_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 4 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 1,
'recsPerRow' => 10,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => true ),
'misc' => array( 'type' => 'list',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'simple_search' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo',
'expand_button' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'list_options',
'notifications',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'vertical-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'cell_top',
'colspan' => 1 ) ),
'section' => 'head' ),
array( 'cells' => array( array( 'cell' => 'cell_label',
'colspan' => 1,
'rowspan' => 1 ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_field',
'colspan' => 1 ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 1 ) ),
'section' => 'foot' ) ),
'cells' => array( 'cell_top' => array( 'model' => 'cell_top',
'items' => array( 'grid_checkbox' ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array(  ) ),
'cell_label' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field1' ),
'align' => 'center',
'field' => 'icon',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'align' => 'center',
'field' => 'id',
'columnName' => 'field' ) ),
'deferredItems' => array( 'grid_checkbox_head' ),
'recsPerRow' => 10 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'simple_search' => array( 'type' => 'simple_search' ),
'details_found' => array( 'type' => 'details_found' ),
'page_size' => array( 'type' => 'page_size' ),
'pagination' => array( 'type' => 'pagination' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'simple_grid_field1' => array( 'field' => 'icon',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'customCSS' => '.r-record-body{
    cursor:pointer;
}
.r-record-body .panel:hover{
    border:1px solid black;
}
:host {
  color: red;
}
' ),
'grid_field' => array( 'field' => 'id',
'type' => 'grid_field',
'customCSS' => '/* Put  your custom CSS code here */

:host {
  font-size:8px;
}
' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'list_options' => array( 'type' => 'list_options',
'items' => array( '-',
'-3',
'-2',
'-1' ) ),
'-' => array( 'type' => '-' ),
'-1' => array( 'type' => '-' ),
'-2' => array( 'type' => '-' ),
'-3' => array( 'type' => '-' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'changepassword_link' ) ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu',
'menuId' => 'DerejaMenuSet' ),
'loginform_login' => array( 'type' => 'loginform_login' ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'notifications' => array( 'type' => 'notifications' ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>