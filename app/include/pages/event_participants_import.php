<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'EventID',
'CandidateID',
'Event_Start_Date',
'Event_End_Date',
'First_Name',
'Middle_Name',
'Last_Name',
'Phone',
'Email',
'StudentID',
'Sex',
'Disability_Status',
'Disability_Type',
'Disability_Type_Other',
'Participant_Type',
'Participant_Field_of_Study',
'Participant_Organization_Type',
'Participant_Organization_Name',
'Participant_Home_Address',
'Event_Round',
'Event_Organizer',
'Event_Location',
'Event_Note',
'Date' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'EventID' => array( 'import_field' ),
'CandidateID' => array( 'import_field1' ),
'Event_Start_Date' => array( 'import_field2' ),
'Event_End_Date' => array( 'import_field3' ),
'First_Name' => array( 'import_field4' ),
'Middle_Name' => array( 'import_field5' ),
'Last_Name' => array( 'import_field6' ),
'Phone' => array( 'import_field7' ),
'Email' => array( 'import_field8' ),
'StudentID' => array( 'import_field9' ),
'Sex' => array( 'import_field10' ),
'Disability_Status' => array( 'import_field11' ),
'Disability_Type' => array( 'import_field12' ),
'Disability_Type_Other' => array( 'import_field13' ),
'Participant_Type' => array( 'import_field14' ),
'Participant_Field_of_Study' => array( 'import_field15' ),
'Participant_Organization_Type' => array( 'import_field16' ),
'Participant_Organization_Name' => array( 'import_field17' ),
'Participant_Home_Address' => array( 'import_field18' ),
'Event_Round' => array( 'import_field19' ),
'Event_Organizer' => array( 'import_field20' ),
'Event_Location' => array( 'import_field21' ),
'Event_Note' => array( 'import_field22' ),
'Date' => array( 'import_field23' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field22',
'import_field23' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid',
'import_field14' => 'grid',
'import_field15' => 'grid',
'import_field16' => 'grid',
'import_field17' => 'grid',
'import_field18' => 'grid',
'import_field19' => 'grid',
'import_field20' => 'grid',
'import_field21' => 'grid',
'import_field22' => 'grid',
'import_field23' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field22',
'import_field23' ) ),
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
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
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
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field22',
'import_field23' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'EventID',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'CandidateID',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'Event_Start_Date',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'Event_End_Date',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'First_Name',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'Middle_Name',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'Last_Name',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'Phone',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'Email',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'StudentID',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'Sex',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'Disability_Status',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'Disability_Type',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'Disability_Type_Other',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'Participant_Type',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'Participant_Field_of_Study',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'Participant_Organization_Type',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'Participant_Organization_Name',
'type' => 'import_field' ),
'import_field18' => array( 'field' => 'Participant_Home_Address',
'type' => 'import_field' ),
'import_field19' => array( 'field' => 'Event_Round',
'type' => 'import_field' ),
'import_field20' => array( 'field' => 'Event_Organizer',
'type' => 'import_field' ),
'import_field21' => array( 'field' => 'Event_Location',
'type' => 'import_field' ),
'import_field22' => array( 'field' => 'Event_Note',
'type' => 'import_field' ),
'import_field23' => array( 'field' => 'Date',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>