<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'format',
'description' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'format' => array( 'integrated_search_field' ),
'description' => array( 'integrated_search_field1' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'search_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'search_search',
'search_reset',
'search_back_list' ),
'grid' => array( 'integrated_search_field',
'integrated_search_field1' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'search_header' => 'top',
'search_search' => 'below-grid',
'search_reset' => 'below-grid',
'search_back_list' => 'below-grid',
'integrated_search_field' => 'grid',
'integrated_search_field1' => 'grid' ),
'itemLocations' => array( 'integrated_search_field' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_search_field1' => array( 'location' => 'grid',
'cellId' => 'c' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'search_header' => array( 'search_header' ),
'search_reset' => array( 'search_reset' ),
'search_back_list' => array( 'search_back_list' ),
'search_search' => array( 'search_search' ),
'integrated_search_field' => array( 'integrated_search_field',
'integrated_search_field1' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_search_field',
'integrated_search_field1' ),
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
'misc' => array( 'type' => 'search',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'search',
'type' => 'search',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'search-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c' ) ),
'section' => '' ) ),
'cells' => array( 'c' => array( 'model' => 'c1',
'items' => array( 'search_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'search-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'search-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c' ) ),
'section' => '' ) ),
'cells' => array( 'c' => array( 'model' => 'c1',
'items' => array( 'search_search',
'search_reset',
'search_back_list' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-search',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c' ) ),
'section' => '' ) ),
'cells' => array( 'c' => array( 'model' => 'c3',
'items' => array( 'integrated_search_field',
'integrated_search_field1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'separateLabels' => false ) ),
'items' => array( 'search_header' => array( 'type' => 'search_header' ),
'search_reset' => array( 'type' => 'search_reset' ),
'search_back_list' => array( 'type' => 'search_back_list' ),
'search_search' => array( 'type' => 'search_search' ),
'integrated_search_field' => array( 'field' => 'format',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field1' => array( 'field' => 'description',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>