<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'changepwd_message' ),
'supertop' => array(  ),
'top' => array( 'image',
'changepwd_header' ),
'grid' => array( 'oldpass_label',
'oldpass',
'newpass_label',
'newpass',
'confirm_label',
'confirm' ),
'footer' => array( 'changepwd_button',
'changepwd_back' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'changepwd_message' => 'above-grid',
'image' => 'top',
'changepwd_header' => 'top',
'oldpass_label' => 'grid',
'oldpass' => 'grid',
'newpass_label' => 'grid',
'newpass' => 'grid',
'confirm_label' => 'grid',
'confirm' => 'grid',
'changepwd_button' => 'footer',
'changepwd_back' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'oldpass_label' => array( 'oldpass_label' ),
'newpass_label' => array( 'newpass_label' ),
'confirm_label' => array( 'confirm_label' ),
'oldpass' => array( 'oldpass' ),
'newpass' => array( 'newpass' ),
'confirm' => array( 'confirm' ),
'changepwd_message' => array( 'changepwd_message' ),
'changepwd_button' => array( 'changepwd_button' ),
'changepwd_back' => array( 'changepwd_back' ),
'changepwd_header' => array( 'changepwd_header' ),
'image' => array( 'image' ) ),
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
'buttons' => array(  ) ),
'changepwd' => array( 'oldPassFieldOnPage' => true ) );
			$pageArray = array( 'id' => 'changepwd',
'type' => 'changepwd',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'changepwd-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'changepwd_message' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'changepwd-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'image',
'changepwd_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'changepwd-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c4' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c5' ),
array( 'cell' => 'c6' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'oldpass_label' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'oldpass' ) ),
'c3' => array( 'model' => 'c3',
'items' => array( 'newpass_label' ) ),
'c4' => array( 'model' => 'c4',
'items' => array( 'newpass' ) ),
'c5' => array( 'model' => 'c5',
'items' => array( 'confirm_label' ) ),
'c6' => array( 'model' => 'c6',
'items' => array( 'confirm' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'changepwd-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'changepwd_button',
'changepwd_back' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'oldpass_label' => array( 'type' => 'oldpass_label' ),
'newpass_label' => array( 'type' => 'newpass_label' ),
'confirm_label' => array( 'type' => 'confirm_label' ),
'oldpass' => array( 'type' => 'oldpass' ),
'newpass' => array( 'type' => 'newpass' ),
'confirm' => array( 'type' => 'confirm' ),
'changepwd_message' => array( 'type' => 'changepwd_message' ),
'changepwd_button' => array( 'type' => 'changepwd_button' ),
'changepwd_back' => array( 'type' => 'changepwd_back' ),
'changepwd_header' => array( 'type' => 'changepwd_header' ),
'image' => array( 'type' => 'image',
'image' => array( 'image' => 'dereja.png',
'source' => 2 ) ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>