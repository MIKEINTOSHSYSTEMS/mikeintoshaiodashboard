<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'name',
'desc',
'users',
'schedule',
'subj',
'sms',
'email',
'password',
'notiday',
'notitime' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'name' => array( 'integrated_edit_field' ),
'desc' => array( 'integrated_edit_field1' ),
'users' => array( 'integrated_edit_field2' ),
'schedule' => array( 'integrated_edit_field3' ),
'subj' => array( 'subj_field' ),
'sms' => array( 'sms_field' ),
'email' => array( 'email_field' ),
'password' => array( 'integrated_edit_field4' ),
'notiday' => array( 'integrated_edit_field5' ),
'notitime' => array( 'integrated_edit_field6' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'add_header' ),
'above-grid' => array( 'add_message' ),
'below-grid' => array( 'add_save',
'add_back_list',
'add_cancel',
'close' ),
'grid' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field4',
'integrated_edit_field3',
'label_settings',
'tabs',
'noti1',
'integrated_edit_field5',
'text2',
'integrated_edit_field6' ),
'section' => array( 'subj_field',
'email_field' ),
'section1' => array( 'sms_field' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'add_header' => 'top',
'add_message' => 'above-grid',
'add_save' => 'below-grid',
'add_back_list' => 'below-grid',
'add_cancel' => 'below-grid',
'close' => 'below-grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field3' => 'grid',
'label_settings' => 'grid',
'tabs' => 'grid',
'noti1' => 'grid',
'integrated_edit_field5' => 'grid',
'text2' => 'grid',
'integrated_edit_field6' => 'grid',
'subj_field' => 'section',
'email_field' => 'section',
'sms_field' => 'section1' ),
'itemLocations' => array( 'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c' ),
'label_settings' => array( 'location' => 'grid',
'cellId' => 'c1' ),
'tabs' => array( 'location' => 'grid',
'cellId' => 'c1' ),
'noti1' => array( 'location' => 'grid',
'cellId' => 'c2' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c2' ),
'text2' => array( 'location' => 'grid',
'cellId' => 'c2' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c2' ),
'subj_field' => array( 'location' => 'section',
'cellId' => 'c1' ),
'email_field' => array( 'location' => 'section',
'cellId' => 'c1' ),
'sms_field' => array( 'location' => 'section1',
'cellId' => 'c1' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_back_list' => array( 'add_back_list' ),
'add_cancel' => array( 'add_cancel' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'subj_field',
'sms_field',
'email_field',
'integrated_edit_field4' ),
'tabs' => array( 'tabs' ),
'edit_field' => array( 'integrated_edit_field5',
'integrated_edit_field6' ),
'text' => array( 'text2',
'noti1',
'label_settings' ),
'custom_button' => array( 'close' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field4',
'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'noti1',
'integrated_edit_field5',
'text2',
'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'label_settings',
'tabs' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 4 ),
'section' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'subj_field',
'email_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section1' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'sms_field' ),
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
'hasCustomButtons' => true,
'customButtons' => array( 'Close1' ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'add',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array( 'Close1' ) ) );
			$pageArray = array( 'id' => 'add',
'type' => 'add',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'add-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'add-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'add-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_save',
'add_back_list',
'add_cancel',
'close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c',
'rowspan' => 1 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c1' ) ) ),
array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field4',
'integrated_edit_field3' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c1' => array( 'model' => 'c3',
'items' => array( 'label_settings',
'tabs' ) ),
'c2' => array( 'model' => 'c3',
'items' => array( 'noti1',
'integrated_edit_field5',
'text2',
'integrated_edit_field6' ),
'orientation' => 'horizontal' ),
'c3' => array( 'model' => 'c3',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'subj_field',
'email_field' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'sms_field' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header',
'title' => array( 'page' => 'add',
'table' => 'mtmeetings',
'type' => 7 ) ),
'add_back_list' => array( 'type' => 'add_back_list' ),
'add_cancel' => array( 'type' => 'add_cancel' ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save',
'label' => array( 'type' => 0,
'text' => 'Create meeting' ) ),
'integrated_edit_field' => array( 'field' => 'name',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'desc',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'users',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'schedule',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'tabs' => array( 'type' => 'tabs',
'titles' => array( array( 'text' => 'Email',
'type' => 0 ),
array( 'text' => 'SMS',
'type' => 0 ) ),
'locations' => array( 'section',
'section1' ),
'mobileDisplay' => '',
'bsStyle' => 'default',
'panelType' => 2 ),
'subj_field' => array( 'field' => 'subj',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'sms_field' => array( 'field' => 'sms',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'email_field' => array( 'field' => 'email',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'password',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'notiday',
'type' => 'edit_field',
'orientation' => 0,
'joined' => false,
'separated' => true,
'customCSS' => '/* Put  your custom CSS code here */

:host {
  width:100px !important;
}
' ),
'integrated_edit_field6' => array( 'field' => 'notitime',
'type' => 'edit_field',
'orientation' => 0,
'joined' => false,
'separated' => true,
'customCSS' => '/* Put  your custom CSS code here */

:host {
  width:160px !important;
}
' ),
'text2' => array( 'type' => 'text',
'label' => array( 'text' => 'days before at',
'type' => 0 ),
'editedByRte' => false,
'padding' => array( 'top' => '8px' ) ),
'noti1' => array( 'type' => 'text',
'label' => array( 'text' => 'Notify',
'type' => 0 ),
'editedByRte' => false,
'padding' => array( 'left' => '305px',
'top' => '8px' ) ),
'close' => array( 'type' => 'custom_button',
'eventId' => 'Close1',
'label' => array( 'text' => 'Close',
'type' => 0 ) ),
'label_settings' => array( 'type' => 'text',
'label' => array( 'text' => 'Notifications',
'type' => 0 ),
'editedByRte' => false,
'bold' => true ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>