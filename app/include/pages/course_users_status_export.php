<?php
			$optionsArray = array( 'totals' => array( 'id' => array( 'totalsType' => '' ),
'name' => array( 'totalsType' => '' ),
'code' => array( 'totalsType' => '' ),
'category_id' => array( 'totalsType' => '' ),
'creation_date' => array( 'totalsType' => '' ),
'last_update_on' => array( 'totalsType' => '' ),
'creator_id' => array( 'totalsType' => '' ),
'role' => array( 'totalsType' => '' ),
'enrolled_on' => array( 'totalsType' => '' ),
'enrolled_on_timestamp' => array( 'totalsType' => '' ),
'completed_on' => array( 'totalsType' => '' ),
'completed_on_timestamp' => array( 'totalsType' => '' ),
'completion_percentage' => array( 'totalsType' => '' ),
'total_time' => array( 'totalsType' => '' ),
'total_time_seconds' => array( 'totalsType' => '' ),
'course_id' => array( 'totalsType' => '' ),
'course_name' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'id',
'name',
'code',
'category_id',
'role',
'enrolled_on',
'enrolled_on_timestamp',
'completed_on',
'completed_on_timestamp',
'completion_percentage',
'creation_date',
'last_update_on',
'total_time',
'total_time_seconds',
'creator_id',
'course_id',
'course_name' ),
'exportFields' => array( 'id',
'name',
'code',
'category_id',
'role',
'enrolled_on',
'enrolled_on_timestamp',
'completed_on',
'completed_on_timestamp',
'completion_percentage',
'total_time',
'total_time_seconds',
'creation_date',
'last_update_on',
'creator_id',
'course_id',
'course_name' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id' => array( 'export_field' ),
'name' => array( 'export_field1' ),
'code' => array( 'export_field2' ),
'category_id' => array( 'export_field3' ),
'role' => array( 'export_field4' ),
'enrolled_on' => array( 'export_field5' ),
'enrolled_on_timestamp' => array( 'export_field6' ),
'completed_on' => array( 'export_field7' ),
'completed_on_timestamp' => array( 'export_field8' ),
'completion_percentage' => array( 'export_field9' ),
'creation_date' => array( 'export_field10' ),
'last_update_on' => array( 'export_field11' ),
'total_time' => array( 'export_field12' ),
'total_time_seconds' => array( 'export_field13' ),
'creator_id' => array( 'export_field14' ),
'course_id' => array( 'export_field15' ),
'course_name' => array( 'export_field16' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field12',
'export_field13',
'export_field10',
'export_field11',
'export_field14',
'export_field15',
'export_field16' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field14' => 'grid',
'export_field15' => 'grid',
'export_field16' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field14',
'export_field15',
'export_field16' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field12',
'export_field13',
'export_field10',
'export_field11',
'export_field14',
'export_field15',
'export_field16' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'id',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'name',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'code',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'category_id',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'role',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'enrolled_on',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'enrolled_on_timestamp',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'completed_on',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'completed_on_timestamp',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'completion_percentage',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'creation_date',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'last_update_on',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'total_time',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'total_time_seconds',
'type' => 'export_field' ),
'export_field14' => array( 'field' => 'creator_id',
'type' => 'export_field' ),
'export_field15' => array( 'field' => 'course_id',
'type' => 'export_field' ),
'export_field16' => array( 'field' => 'course_name',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>