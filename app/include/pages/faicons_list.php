<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => false,
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
'supertop' => array( 'username_button' ),
'left' => array(  ),
'top' => array(  ),
'grid' => array( 'grid_checkbox',
'simple_grid_field1',
'grid_field' ) ),
'formXtTags' => array( 'below-grid' => array( 'pagination' ),
'supertop' => array( 'loggedas_message' ),
'left' => array(  ),
'top' => array(  ) ),
'itemForms' => array( 'simple_search' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'pagination' => 'below-grid',
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
'itemVisiblity' => array( 'simple_search' => 3,
'username_button' => 3 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'grid_field' => array( 'simple_grid_field1',
'grid_field' ),
'username_button' => array( 'username_button' ),
'changepassword_link' => array( 'changepassword_link' ) ),
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
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 1,
'recsPerRow' => 10,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'list',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'topbar',
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
'supertop' => array( 'modelId' => 'topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'list-vbar',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
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
'recsPerRow' => 10 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'-' => array( 'type' => '-' ),
'-1' => array( 'type' => '-' ),
'-2' => array( 'type' => '-' ),
'-3' => array( 'type' => '-' ),
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
'username_button' => array( 'type' => 'username_button',
'items' => array( 'changepassword_link' ) ),
'changepassword_link' => array( 'type' => 'changepassword_link' ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 11,
'businessTemplate' => 'KnowledgeBase',
'businessTemplatePageId' => 'list',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>