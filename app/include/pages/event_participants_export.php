<?php
			$optionsArray = array( 'totals' => array( 'CandidateID' => array( 'totalsType' => '' ),
'Full_Name' => array( 'totalsType' => '' ),
'Sex' => array( 'totalsType' => '' ),
'DOB' => array( 'totalsType' => '' ),
'Region' => array( 'totalsType' => '' ),
'City' => array( 'totalsType' => '' ),
'Phone_Number' => array( 'totalsType' => '' ),
'Email_Address' => array( 'totalsType' => '' ),
'EventID' => array( 'totalsType' => '' ),
'Event_Title' => array( 'totalsType' => '' ),
'Event_Round' => array( 'totalsType' => '' ),
'Event_Start_Date' => array( 'totalsType' => '' ),
'Event_End_Date' => array( 'totalsType' => '' ),
'Event_Organizer' => array( 'totalsType' => '' ),
'Event_Location' => array( 'totalsType' => '' ),
'Event_Note' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'EventID',
'CandidateID',
'Event_Start_Date',
'Event_End_Date',
'Full_Name',
'DOB',
'Region',
'City',
'Phone_Number',
'Email_Address',
'Sex',
'Event_Title',
'Event_Location',
'Event_Round',
'Event_Organizer',
'Event_Note' ),
'exportFields' => array( 'EventID',
'CandidateID',
'Event_Start_Date',
'Event_End_Date',
'Sex',
'Event_Round',
'Event_Organizer',
'Event_Note',
'Full_Name',
'DOB',
'Region',
'City',
'Phone_Number',
'Email_Address',
'Event_Title',
'Event_Location' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'EventID' => array( 'export_field' ),
'CandidateID' => array( 'export_field1' ),
'Event_Start_Date' => array( 'export_field2' ),
'Event_End_Date' => array( 'export_field3' ),
'Full_Name' => array( 'export_field4' ),
'DOB' => array( 'export_field5' ),
'Region' => array( 'export_field6' ),
'City' => array( 'export_field7' ),
'Phone_Number' => array( 'export_field8' ),
'Email_Address' => array( 'export_field9' ),
'Sex' => array( 'export_field10' ),
'Event_Title' => array( 'export_field11' ),
'Event_Location' => array( 'export_field12' ),
'Event_Round' => array( 'export_field19' ),
'Event_Organizer' => array( 'export_field20' ),
'Event_Note' => array( 'export_field22' ) ) ),
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
'export_field10',
'export_field19',
'export_field20',
'export_field22',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field11',
'export_field12' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field10' => 'grid',
'export_field19' => 'grid',
'export_field20' => 'grid',
'export_field22' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
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
'export_field19',
'export_field20',
'export_field22' ) ),
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
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
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
'export_field10',
'export_field19',
'export_field20',
'export_field22',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field11',
'export_field12' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'EventID',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'CandidateID',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'Event_Start_Date',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'Event_End_Date',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'Full_Name',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'DOB',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'Region',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'City',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'Phone_Number',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'Email_Address',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'Sex',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'Event_Title',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'Event_Location',
'type' => 'export_field' ),
'export_field19' => array( 'field' => 'Event_Round',
'type' => 'export_field' ),
'export_field20' => array( 'field' => 'Event_Organizer',
'type' => 'export_field' ),
'export_field22' => array( 'field' => 'Event_Note',
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