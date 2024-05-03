<?php
			$optionsArray = array( 'details' => array( 'forumreplies' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'topic',
'question',
'categoryid',
'pinned' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'topic' => array( 'integrated_edit_field' ),
'question' => array( 'integrated_edit_field2' ),
'categoryid' => array( 'integrated_edit_field1' ),
'pinned' => array( 'pinned_field' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'expand_menu_button',
'collapse_button',
'snippet1',
'loginform_login',
'username_button',
'snippet2',
'snippet3' ),
'left' => array( 'menu',
'logo',
'expand_button' ),
'top' => array( 'add_header',
'breadcrumb' ),
'above-grid' => array( 'add_message' ),
'below-grid' => array( 'add_save',
'add_back_list',
'add_cancel' ),
'grid' => array( 'pinned_field',
'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field1' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'snippet1' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'snippet2' => 'supertop',
'snippet3' => 'supertop',
'menu' => 'left',
'logo' => 'left',
'expand_button' => 'left',
'add_header' => 'top',
'breadcrumb' => 'top',
'add_message' => 'above-grid',
'add_save' => 'below-grid',
'add_back_list' => 'below-grid',
'add_cancel' => 'below-grid',
'pinned_field' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field1' => 'grid' ),
'itemLocations' => array( 'pinned_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c1' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c2' ) ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'expand_button' => 5,
'expand_menu_button' => 2 ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'add_back_list' => array( 'add_back_list' ),
'add_cancel' => array( 'add_cancel' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field1',
'pinned_field' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'username_button' => array( 'username_button' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'snippet' => array( 'snippet1',
'snippet2',
'snippet3' ),
'breadcrumb' => array( 'breadcrumb' ),
'collapse_button' => array( 'collapse_button' ),
'expand_button' => array( 'expand_button' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'pinned_field',
'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 3 ) ) ),
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
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'add',
'type' => 'add',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'leftbar-top-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'snippet1',
'loginform_login',
'username_button',
'snippet2',
'snippet3' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'menu' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c0' => array( 'model' => 'c0',
'items' => array( 'logo',
'expand_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'add-header',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'breadcrumb' ),
'align' => 'right',
'customCSS' => '/* Put  your custom CSS code here */

:host {
  height:1px;
}
' ) ),
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
'add_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3',
'colspan' => 1 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2',
'colspan' => 1 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c1',
'colspan' => 1 ) ) ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'pinned_field',
'integrated_edit_field' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c1' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ) ),
'c2' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header',
'font-size' => '24px',
'color' => '#444444' ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save' ),
'add_back_list' => array( 'type' => 'add_back_list' ),
'add_cancel' => array( 'type' => 'add_cancel' ),
'integrated_edit_field' => array( 'field' => 'topic',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'question',
'type' => 'integrated_edit_field',
'orientation' => 0,
'customCSS' => '/* Put  your custom CSS code here */
' ),
'integrated_edit_field1' => array( 'field' => 'categoryid',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'changepassword_link',
'userinfo_link',
'logout_link' ),
'icon' => array( 'glyph' => '' ),
'buttonStyle' => 'link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'snippet1' => array( 'type' => 'snippet',
'eventId' => 'alert_notify',
'label' => array( 'text' => 'alert notify',
'type' => 0 ) ),
'snippet2' => array( 'type' => 'snippet',
'eventId' => 'User_Name',
'label' => array( 'text' => 'User Name',
'type' => 0 ) ),
'breadcrumb' => array( 'type' => 'breadcrumb',
'customCSS' => '/* Put  your custom CSS code here */

:host {
  position:relative;
}
' ),
'snippet3' => array( 'type' => 'snippet',
'eventId' => 'skins',
'label' => array( 'text' => 'skins',
'type' => 0 ) ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'expand_button' => array( 'type' => 'expand_button' ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'pinned_field' => array( 'field' => 'pinned',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>