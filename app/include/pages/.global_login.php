<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => true ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'login_message',
'login_welcome' ),
'top' => array( 'text',
'text5',
'text4' ),
'grid' => array( 'username_label',
'username',
'password_label',
'password',
'remember_password',
'guest_login',
'captcha' ),
'footer' => array( 'login_button',
'loginform_register_link',
'login_remind',
'text2',
'text3' ),
'superbottom' => array( 'text1' ) ),
'formXtTags' => array(  ),
'itemForms' => array( 'login_message' => 'above-grid',
'login_welcome' => 'above-grid',
'text' => 'top',
'text5' => 'top',
'text4' => 'top',
'username_label' => 'grid',
'username' => 'grid',
'password_label' => 'grid',
'password' => 'grid',
'remember_password' => 'grid',
'guest_login' => 'grid',
'captcha' => 'grid',
'login_button' => 'footer',
'loginform_register_link' => 'footer',
'login_remind' => 'footer',
'text2' => 'footer',
'text3' => 'footer',
'text1' => 'superbottom' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'username_label' => array( 'username_label' ),
'username' => array( 'username' ),
'password_label' => array( 'password_label' ),
'password' => array( 'password' ),
'login_message' => array( 'login_message' ),
'login_button' => array( 'login_button' ),
'guest_login' => array( 'guest_login' ),
'remember_password' => array( 'remember_password' ),
'login_welcome' => array( 'login_welcome' ),
'loginform_register_link' => array( 'loginform_register_link' ),
'text' => array( 'text',
'text1',
'text2',
'text3',
'text4',
'text5' ),
'login_remind' => array( 'login_remind' ),
'captcha' => array( 'captcha' ) ),
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
			$pageArray = array( 'id' => 'login',
'type' => 'login',
'layoutId' => 'pretty1',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'login-above-grid',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array(  ),
'align' => 'center' ),
'c1' => array( 'model' => 'c1',
'items' => array( 'login_message' ),
'align' => 'center' ),
'c' => array( 'model' => 'c2',
'items' => array( 'login_welcome' ),
'align' => 'center' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'plogin-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2',
'colspan' => 1 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3',
'colspan' => 1 ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'text',
'text5' ),
'align' => 'center' ),
'c3' => array( 'model' => 'c3',
'items' => array( 'text4' ),
'align' => 'center',
'bold' => true ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'plogin-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2',
'colspan' => 2 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3',
'colspan' => 2 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c6' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'username_label',
'username' ),
'align' => 'left' ),
'c2' => array( 'model' => 'c2',
'items' => array( 'password_label',
'password' ),
'align' => 'left' ),
'c4' => array( 'model' => 'c4',
'items' => array( 'remember_password' ) ),
'c6' => array( 'model' => 'c6',
'items' => array( 'guest_login' ) ),
'c3' => array( 'model' => 'c3',
'items' => array( 'captcha' ),
'align' => 'left' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'plogin-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c3' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c5' ),
array( 'cell' => 'c6' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8',
'colspan' => 2 ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'login_button' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_register_link',
'login_remind' ) ),
'c' => array( 'model' => 'c1',
'items' => array(  ) ),
'c3' => array( 'model' => 'c2',
'items' => array(  ) ),
'c5' => array( 'model' => 'c2',
'items' => array( 'text2' ),
'align' => 'left' ),
'c6' => array( 'model' => 'c2',
'items' => array( 'text3' ),
'align' => 'left' ),
'c8' => array( 'model' => 'c2',
'items' => array(  ),
'align' => 'center' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'superbottom' => array( 'modelId' => 'plogin-superbottom',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'text1' ),
'align' => 'center' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'username_label' => array( 'type' => 'username_label' ),
'username' => array( 'type' => 'username' ),
'password_label' => array( 'type' => 'password_label' ),
'password' => array( 'type' => 'password' ),
'login_message' => array( 'type' => 'login_message' ),
'login_button' => array( 'type' => 'login_button' ),
'guest_login' => array( 'type' => 'guest_login' ),
'remember_password' => array( 'type' => 'remember_password' ),
'login_welcome' => array( 'type' => 'login_welcome',
'bold' => true,
'font-size' => '22px' ),
'loginform_register_link' => array( 'type' => 'loginform_register_link' ),
'text' => array( 'type' => 'text',
'label' => array( 'type' => 0,
'text' => 'Welcome' ),
'editedByRte' => false,
'font-size' => '27px',
'bold' => true,
'color' => '#ff0007' ),
'text1' => array( 'type' => 'text',
'label' => array( 'text' => 'This Application is for Internal Use only!
It can only be accessed by an authorized personel!',
'type' => 0 ),
'editedByRte' => false,
'color' => '#8e8d8d' ),
'login_remind' => array( 'type' => 'login_remind' ),
'captcha' => array( 'type' => 'captcha' ),
'text2' => array( 'type' => 'text',
'label' => array( 'type' => 0,
'text' => '<!--<p><strong style="color: rgb(255, 102, 0);">Demo and Testing Roles and Credentials for Dereja M &amp; E Data Exploration and Entry System</strong></p><p class="ql-align-center"><strong>Password for All:</strong> 01234567</p><p><strong style="color: rgb(255, 0, 0);">!!!PLEASE DO NOT CHANGE THE PASSWORD!!!</strong></p>-->' ),
'editedByRte' => true ),
'text3' => array( 'type' => 'text',
'label' => array( 'type' => 0,
'text' => '<!--<p><strong><u>Data Management</u></strong></p><p><strong>Username:</strong> derejadata</p><p><strong><u>Monitoring and Evaluation</u></strong></p><p><strong>Username:</strong> derejamel</p><p><strong><u>Data Entry</u></strong></p><p><strong>Username:</strong> derejaentry</p>-->' ),
'editedByRte' => true ),
'text4' => array( 'type' => 'text',
'label' => array( 'type' => 0,
'text' => '<p class="ql-align-center"><strong style="color: rgb(255, 0, 0);"><img width="143" height="54" alt="Dereja M&amp;E System" src="./images/derejalogo.svg"></strong></p><h3 class="ql-align-center"><strong style="color: rgb(255, 102, 0);">M</strong><strong style="color: rgb(255, 0, 0);">&amp;</strong><strong style="color: rgb(255, 102, 0);">E</strong><strong> </strong><strong style="color: rgb(255, 0, 0);">System</strong></h3>' ),
'editedByRte' => true ),
'text5' => array( 'type' => 'text',
'label' => array( 'text' => 'To',
'type' => 0 ),
'editedByRte' => false,
'color' => '#ff7e00',
'bold' => true,
'font-size' => '27px' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image',
'image' => array( 'source' => 1,
'image' => 'windows-SwHvzwEzCfA-unsplash.jpg' ) ),
'imageBgColor' => '#ffffff',
'controlsBgColor' => '#f7f7f7',
'imagePosition' => 'right',
'pageCSS' => '/* Put  your custom CSS code here */

' );
		?>