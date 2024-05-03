<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => true,
'detailsAdd' => true,
'inlineEdit' => false,
'spreadsheetMode' => false,
'addToBottom' => true,
'delete' => false,
'updateSelected' => false,
'addInPopup' => null,
'viewInPopup' => null,
'clickSort' => false,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'master' => array( 'sgb_suggestions' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'id' => array( 'totalsType' => '' ),
'user_id' => array( 'totalsType' => '' ),
'comment' => array( 'totalsType' => '' ),
'created_date' => array( 'totalsType' => '' ),
's_id' => array( 'totalsType' => '' ),
'status' => array( 'totalsType' => '' ),
'images' => array( 'totalsType' => '' ),
'admin_buttons' => array( 'totalsType' => '' ),
'user_buttons' => array( 'totalsType' => '' ),
'name' => array( 'totalsType' => '' ),
'email' => array( 'totalsType' => '' ),
'merged_info' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'created_date',
'user_id',
'comment',
'name',
'email',
'admin_buttons' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'status',
'images' ),
'filterFields' => array(  ),
'inlineAddFields' => array( 'comment',
'name',
'email' ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'comment' => array( 'grid_field' ),
'user_id' => array( 'grid_field1' ),
'created_date' => array( 'grid_field2' ),
'admin_buttons' => array( 'sgb_comments_moderate_panel' ),
'name' => array( 'grid_field3' ),
'email' => array( 'grid_field4' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'below-grid' => array( 'pagination' ),
'supertop' => array( 'logo',
'loginform_login',
'username_button' ),
'left' => array( 'inline_save_all',
'inline_cancel_all',
'inline_add',
'search_panel' ),
'top' => array( 'master_info' ),
'grid' => array( 'grid_field2',
'grid_field1',
'add_comment_label',
'message_c_label',
'grid_field',
'sgb_comments_countheader',
'grid_edit',
'grid_inline_cancel',
'grid_inline_save',
'sgb_comments_moderate_panel',
'name_c_label',
'grid_field3',
'name_c_tooltip',
'email_c_label',
'grid_field4',
'email_c_tooltip' ) ),
'formXtTags' => array( 'above-grid' => array(  ),
'below-grid' => array( 'pagination' ),
'top' => array( 'mastertable_block' ) ),
'itemForms' => array( 'pagination' => 'below-grid',
'logo' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'inline_save_all' => 'left',
'inline_cancel_all' => 'left',
'inline_add' => 'left',
'search_panel' => 'left',
'master_info' => 'top',
'grid_field2' => 'grid',
'grid_field1' => 'grid',
'add_comment_label' => 'grid',
'message_c_label' => 'grid',
'grid_field' => 'grid',
'sgb_comments_countheader' => 'grid',
'grid_edit' => 'grid',
'grid_inline_cancel' => 'grid',
'grid_inline_save' => 'grid',
'sgb_comments_moderate_panel' => 'grid',
'name_c_label' => 'grid',
'grid_field3' => 'grid',
'name_c_tooltip' => 'grid',
'email_c_label' => 'grid',
'grid_field4' => 'grid',
'email_c_tooltip' => 'grid' ),
'itemLocations' => array( 'grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'add_comment_label' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'message_c_label' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'sgb_comments_countheader' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'grid_inline_save' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'sgb_comments_moderate_panel' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'name_c_label' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'name_c_tooltip' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'email_c_label' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'email_c_tooltip' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ) ),
'itemVisiblity' => array( 'username_button' => 3,
'loginform_login' => 3,
'search_panel' => 5 ) ),
'itemsByType' => array( 'logo' => array( 'logo' ),
'pagination' => array( 'pagination' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'-' => array( '-',
'-1',
'-2',
'-3',
'-5' ),
'inline_add' => array( 'inline_add' ),
'inline_save_all' => array( 'inline_save_all' ),
'inline_cancel_all' => array( 'inline_cancel_all' ),
'master_info' => array( 'master_info' ),
'grid_inline_save' => array( 'grid_inline_save' ),
'grid_field' => array( 'grid_field',
'grid_field1',
'grid_field2',
'sgb_comments_moderate_panel',
'grid_field3',
'grid_field4' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ),
'snippet' => array( 'sgb_comments_countheader' ),
'text' => array( 'add_comment_label',
'message_c_label',
'name_c_label',
'email_c_label',
'name_c_tooltip',
'email_c_tooltip' ),
'grid_edit' => array( 'grid_edit' ),
'search_panel' => array( 'search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'cell_top' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'sgb_comments_countheader',
'grid_edit' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'grid_field2',
'grid_field1',
'add_comment_label',
'message_c_label',
'grid_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'name_c_label',
'grid_field3',
'name_c_tooltip' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'email_c_label',
'grid_field4',
'email_c_tooltip' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 3 ),
'tags' => array( 'admin_buttons_fieldcolumn' ),
'items' => array( 'sgb_comments_moderate_panel' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 4 ),
'tags' => array( 'inline_cancel',
'inline_save' ),
'items' => array( 'grid_inline_cancel',
'grid_inline_save' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 3,
'height' => 6 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 1,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'list',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array( 'comment' ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 2,
'forms' => array( 'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2,
'rowspan' => 1 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c3' => array( 'model' => 'c3',
'items' => array(  ) ),
'c4' => array( 'model' => 'c4',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'list-vbar',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'inline_save_all',
'inline_cancel_all',
'inline_add',
'search_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'master_info' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'vertical-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'cell_top',
'colspan' => 3 ) ),
'section' => 'head' ),
array( 'cells' => array( array( 'cell' => 'cell_field',
'colspan' => 3 ) ),
'section' => 'body' ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field6' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field2',
'colspan' => 3 ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field1',
'colspan' => 3 ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 3 ) ),
'section' => 'foot' ) ),
'cells' => array( 'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'grid_field2',
'grid_field1',
'add_comment_label',
'message_c_label',
'grid_field' ),
'orientation' => 'vertical',
'padding' => array( 'top' => '20px' ),
'field' => 'created_date',
'columnName' => 'field' ),
'cell_top' => array( 'model' => 'cell_top',
'items' => array( 'sgb_comments_countheader',
'grid_edit' ) ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'grid_inline_cancel',
'grid_inline_save' ),
'align' => 'right' ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array(  ) ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'sgb_comments_moderate_panel' ),
'field' => 'admin_buttons',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'name_c_label',
'grid_field3',
'name_c_tooltip' ),
'customCSS' => '/* Put  your custom CSS code here */

:host {
 width:48% !important;
}
',
'orientation' => 'vertical',
'field' => 'name',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'email_c_label',
'grid_field4',
'email_c_tooltip' ),
'customCSS' => '/* Put  your custom CSS code here */

:host {
 width:48% !important;
}
',
'orientation' => 'vertical',
'field' => 'email',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array(  ),
'customCSS' => '/* Put  your custom CSS code here */

:host {
 width:4% !important;
}
' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'logo' => array( 'type' => 'logo' ),
'pagination' => array( 'type' => 'pagination' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'-' => array( 'type' => '-' ),
'-1' => array( 'type' => '-' ),
'-2' => array( 'type' => '-' ),
'inline_add' => array( 'type' => 'inline_add' ),
'inline_save_all' => array( 'type' => 'inline_save_all' ),
'inline_cancel_all' => array( 'type' => 'inline_cancel_all' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'sgb_suggestions' => 'true' ) ),
'grid_inline_save' => array( 'type' => 'grid_inline_save',
'label' => array( 'text' => 'Post Comment',
'type' => 0 ),
'tooltip' => array( 'type' => 0,
'text' => '' ),
'buttonStyle' => 'default',
'icon' => array( 'glyph' => '' ) ),
'grid_field' => array( 'field' => 'comment',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => false,
'group_by' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel',
'customCSS' => '/* Put  your custom CSS code here */

:host {
  display:none;
}
',
'icon' => array( 'fa' => 'external-link' ) ),
'grid_field1' => array( 'field' => 'user_id',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field2' => array( 'field' => 'created_date',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'customCSS' => '/* Put  your custom CSS code here */

:host {
 font-style: italic;
}
' ),
'sgb_comments_countheader' => array( 'eventId' => 'sgb_comments_countheader',
'label' => array( 'text' => 'sgb_comments_countheader',
'type' => 0 ),
'type' => 'snippet' ),
'add_comment_label' => array( 'type' => 'text',
'label' => array( 'text' => '<i class=\'fa fa-plus-square-o\'></i>
<span>Add a comment</span>',
'type' => 0 ),
'editedByRte' => false ),
'grid_edit' => array( 'type' => 'grid_edit',
'customCSS' => '/* Put  your custom CSS code here */

:host {
  display:none;
}
',
'icon' => array( 'fa' => 'arrow-right' ) ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field1' ) ),
'search_panel_field' => array( 'field' => 'status',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'-3' => array( 'type' => '-' ),
'search_panel_field1' => array( 'field' => 'images',
'type' => 'search_panel_field',
'required' => false ),
'-5' => array( 'type' => '-' ),
'sgb_comments_moderate_panel' => array( 'field' => 'admin_buttons',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field3' => array( 'field' => 'name',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => false ),
'grid_field4' => array( 'field' => 'email',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => false ),
'message_c_label' => array( 'type' => 'text',
'label' => array( 'text' => 'Message',
'type' => 0 ),
'editedByRte' => false ),
'name_c_label' => array( 'type' => 'text',
'label' => array( 'text' => 'Name',
'type' => 0 ),
'editedByRte' => false ),
'email_c_label' => array( 'type' => 'text',
'label' => array( 'text' => 'Email',
'type' => 0 ),
'editedByRte' => false ),
'name_c_tooltip' => array( 'type' => 'text',
'label' => array( 'text' => '* Your name will be publicly visible',
'type' => 0 ),
'editedByRte' => false ),
'email_c_tooltip' => array( 'type' => 'text',
'label' => array( 'text' => '* Your email will be visible only to moderators',
'type' => 0 ),
'editedByRte' => false ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 11,
'pageAlign' => 'center',
'addToBottom' => true,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>