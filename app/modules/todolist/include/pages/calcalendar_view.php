<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'fields' => array( 'gridFields' => array( 'Category',
'DateField',
'DayEvent',
'Subject',
'Description' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Category' => array( 'integrated_edit_field' ),
'DateField' => array( 'integrated_edit_field1' ),
'DayEvent' => array( 'integrated_edit_field2' ),
'Subject' => array( 'integrated_edit_field10' ),
'Description' => array( 'description' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'edit_button',
'delete_button' ),
'grid' => array( 'integrated_edit_field10',
'integrated_edit_field2',
'description',
'integrated_edit_field1',
'snippet',
'integrated_edit_field' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'edit_button' => 'below-grid',
'delete_button' => 'below-grid',
'integrated_edit_field10' => 'grid',
'integrated_edit_field2' => 'grid',
'description' => 'grid',
'integrated_edit_field1' => 'grid',
'snippet' => 'grid',
'integrated_edit_field' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c301' ),
'description' => array( 'location' => 'grid',
'cellId' => 'c3020' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c3013' ),
'snippet' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'edit_field' => array( 'integrated_edit_field' ),
'integrated_edit_field' => array( 'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field10',
'description' ),
'custom_button' => array( 'edit_button',
'delete_button' ),
'snippet' => array( 'snippet' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c3020' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'description' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3021' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c301' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c302' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'snippet',
'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c3013' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3014' => array( 'cols' => array( 1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 5 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => true,
'customButtons' => array( 'Edit_Button',
'Delete_from_view' ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array( 'Edit_Button',
'Delete_from_view' ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_button',
'delete_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array(  ),
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
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3',
'colspan' => 1 ),
array( 'cell' => 'c4' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c3020' ),
array( 'cell' => 'c3021' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c301' ),
array( 'cell' => 'c302' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c1' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c3013' ),
array( 'cell' => 'c3014' ) ) ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field10' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c301' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ) ),
'c3020' => array( 'model' => 'c3',
'items' => array( 'description' ) ),
'c3013' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ),
'orientation' => 'horizontal' ),
'c' => array( 'model' => 'c3',
'items' => array( 'snippet',
'integrated_edit_field' ) ),
'c4' => array( 'model' => 'c3',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c3021' => array( 'model' => 'c3',
'items' => array(  ) ),
'c302' => array( 'model' => 'c3',
'items' => array(  ) ),
'c1' => array( 'model' => 'c3',
'items' => array(  ) ),
'c3014' => array( 'model' => 'c3',
'items' => array(  ),
'orientation' => 'horizontal' ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header',
'title' => array( 'page' => 'view',
'table' => 'calcalendar',
'type' => 7 ) ),
'integrated_edit_field' => array( 'field' => 'Category',
'type' => 'edit_field',
'orientation' => 0,
'joined' => false,
'separated' => true,
'customCSS' => '/* Put  your custom CSS code here */

:host {
  margin-top:-10px;
}
' ),
'integrated_edit_field1' => array( 'field' => 'DateField',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'DateField',
'table' => 'calcalendar',
'type' => 3 ) ),
'integrated_edit_field2' => array( 'field' => 'DayEvent',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'Subject',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'edit_button' => array( 'eventId' => 'Edit_Button',
'label' => array( 'text' => 'Edit',
'type' => 0 ),
'type' => 'custom_button' ),
'delete_button' => array( 'eventId' => 'Delete_from_view',
'label' => array( 'text' => 'Delete',
'type' => 0 ),
'type' => 'custom_button' ),
'description' => array( 'field' => 'Description',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'snippet' => array( 'type' => 'snippet',
'eventId' => 'calcalendar_color',
'label' => array( 'text' => 'calcalendar_color',
'type' => 0 ) ) ),
'dbProps' => array(  ),
'version' => 11,
'businessTemplate' => 'Calendar',
'businessTemplatePageId' => 'view',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>