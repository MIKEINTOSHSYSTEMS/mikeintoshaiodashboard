<?php
			$optionsArray = array( 'details' => array( 'todocomments' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'cardname',
'categoryid',
'assign',
'duedate' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array(  ),
'fieldItems' => array( 'cardname' => array( 'integrated_edit_field1' ),
'categoryid' => array( 'integrated_edit_field2' ),
'assign' => array( 'integrated_edit_field' ),
'duedate' => array( 'integrated_edit_field3' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'edit_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'edit_save',
'snippet' ),
'grid' => array( 'snippet1',
'integrated_edit_field2',
'integrated_edit_field1',
'integrated_edit_field',
'integrated_edit_field3',
'section' ),
'section' => array( 'details_preview' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'edit_header' => 'top',
'edit_save' => 'below-grid',
'snippet' => 'below-grid',
'snippet1' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field3' => 'grid',
'section' => 'grid',
'details_preview' => 'section' ),
'itemLocations' => array( 'snippet1' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c1' ),
'section' => array( 'location' => 'grid',
'cellId' => 'c1' ),
'details_preview' => array( 'location' => 'section',
'cellId' => 'c1' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'edit_header' => array( 'edit_header' ),
'edit_save' => array( 'edit_save' ),
'integrated_edit_field' => array( 'integrated_edit_field1',
'integrated_edit_field',
'integrated_edit_field3' ),
'edit_field' => array( 'integrated_edit_field2' ),
'snippet' => array( 'snippet',
'snippet1' ),
'details_preview' => array( 'details_preview' ),
'section' => array( 'section' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c4' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'snippet1',
'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3',
'section' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 4 ),
'section' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'edit',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'edit' => array( 'updateSelected' => false ) );
			$pageArray = array( 'id' => 'edit',
'type' => 'edit',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'edit-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'edit-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'edit-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_save',
'snippet' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c4',
'colspan' => 1 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6',
'colspan' => 1 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c',
'colspan' => 1 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c1' ) ) ) ),
'cells' => array( 'c' => array( 'model' => 'c3',
'items' => array( 'snippet1',
'integrated_edit_field2' ),
'orientation' => 'vertical',
'padding' => array( 'top' => '10px' ) ),
'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ),
'orientation' => 'horizontal',
'padding' => array( 'top' => '5px' ) ),
'c6' => array( 'model' => 'c2',
'items' => array( 'integrated_edit_field' ),
'padding' => array( 'top' => '10px' ) ),
'c1' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3',
'section' ),
'orientation' => 'vertical',
'padding' => array( 'top' => '10px' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'details_preview' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'edit_header' => array( 'type' => 'edit_header' ),
'edit_save' => array( 'type' => 'edit_save' ),
'integrated_edit_field1' => array( 'field' => 'cardname',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'categoryid',
'type' => 'edit_field',
'orientation' => 0,
'label' => array( 'field' => 'categoryid',
'table' => 'todocards',
'type' => 3 ),
'updateOnEdit' => false,
'joined' => false,
'separated' => true,
'customCSS' => '/* Put  your custom CSS code here */

:host {
  margin-left:-20px;
}
' ),
'integrated_edit_field' => array( 'field' => 'assign',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'snippet' => array( 'eventId' => 'Close1',
'label' => array( 'text' => 'Close',
'type' => 0 ),
'type' => 'snippet' ),
'snippet1' => array( 'eventId' => 'todocards_color_edit',
'label' => array( 'text' => 'todocards_color_edit',
'type' => 0 ),
'type' => 'snippet' ),
'integrated_edit_field3' => array( 'field' => 'duedate',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false,
'label' => array( 'field' => 'duedate',
'table' => 'todocards',
'type' => 3 ) ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'todocomments',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ),
'section' => array( 'type' => 'section',
'title' => array( 'text' => 'Comments',
'type' => 0 ),
'location' => 'section',
'initiallyClosed' => true,
'bsStyle' => 'default',
'panelType' => 3 ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>