<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'changepwd_success_header' ),
'grid' => array( 'changepwd_success_message' ),
'footer' => array( 'changepwd_success_back' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'changepwd_success_header' => 'top',
'changepwd_success_message' => 'grid',
'changepwd_success_back' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'changepwd_success_message' => array( 'changepwd_success_message' ),
'changepwd_success_back' => array( 'changepwd_success_back' ),
'changepwd_success_header' => array( 'changepwd_success_header' ) ),
'cellMaps' => array(  ) ),
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
			$pageArray = array( 'id' => 'changepwd_success_Project',
'type' => 'changepwd_success',
'layoutId' => 'first',
'disabled' => 0,
'default' => 8,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'changepwd-success-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'changepwd_success_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'changepwd-success-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'changepwd_success_message' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'changepwd-success-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'changepwd_success_back' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'changepwd_success_message' => array( 'type' => 'changepwd_success_message' ),
'changepwd_success_back' => array( 'type' => 'changepwd_success_back' ),
'changepwd_success_header' => array( 'type' => 'changepwd_success_header' ) ),
'dbProps' => array(  ),
'version' => 11,
'businessTemplate' => 'Project',
'businessTemplatePageId' => 'changepwd_success_SuggestionBox',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>