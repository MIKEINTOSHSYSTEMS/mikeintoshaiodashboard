<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'groupname',
'targetid',
'grouptype' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'groupname' => array( 'integrated_edit_field' ),
'targetid' => array( 'integrated_edit_field1' ),
'grouptype' => array( 'integrated_edit_field2' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'below-grid' => array( 'add_save',
'add_reset' ),
'supertop' => array( 'loginform_login',
'username_button' ),
'left' => array( 'expand_button' ),
'top' => array(  ),
'grid' => array( 'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field1' ) ),
'formXtTags' => array( 'above-grid' => array(  ),
'supertop' => array( 'guestloginbutton',
'loggedas_message' ),
'top' => array(  ) ),
'itemForms' => array( 'add_save' => 'below-grid',
'add_reset' => 'below-grid',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'expand_button' => 'left',
'integrated_edit_field' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field1' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c4' ) ),
'itemVisiblity' => array( 'expand_button' => 5 ) ),
'itemsByType' => array( 'add_save' => array( 'add_save' ),
'add_reset' => array( 'add_reset' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2' ),
'username_button' => array( 'username_button' ),
'changepassword_link' => array( 'changepassword_link' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c4' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'add',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'add',
'type' => 'add',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'add-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'add-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_save',
'add_reset' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c0' => array( 'model' => 'c0',
'items' => array( 'expand_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'add-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ) ) ) ),
'cells' => array( 'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field1' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'add_save' => array( 'type' => 'add_save' ),
'add_reset' => array( 'type' => 'add_reset' ),
'integrated_edit_field' => array( 'field' => 'groupname',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'targetid',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'grouptype',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'changepassword_link' ) ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>