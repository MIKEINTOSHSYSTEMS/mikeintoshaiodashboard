<?php
$securitySettings_var = array( 'providers' => array( array( 'type' => '%db',
'activationField' => 'active',
'active' => true,
'code' => '00',
'codeField' => '',
'emailField' => 'email',
'extUserIdField' => '',
'fullnameField' => 'fullname',
'label' => array( 'text' => 'Database',
'type' => 0 ),
'name' => 'db',
'passwordField' => 'password',
'phoneField' => '',
'resetDateField' => 'reset_date',
'resetTokenField' => 'reset_token',
'table' => array( 'connId' => 'deredevatderejadevmerqconsulta',
'table' => 'derejame_users' ),
'twoFactorField' => '',
'userGroupField' => 'username',
'usernameField' => 'username',
'userpicField' => 'userpic' ) ),
'sessionControl' => array( 'lifeTime' => 15,
'sessionName' => 'LqifVuMaeujgT7RrhzvU',
'JWTSecret' => 'pTBgdmk7SrEchwPYJZQF' ),
'registration' => array( 'passwordValidation' => array( 'strong' => false,
'minimumLength' => 8,
'uniqueCharacters' => 4,
'digitsAndSymbols' => 2,
'upperAndLowerCase' => false ),
'remindMethod' => 1,
'hashAlgorithm' => 0,
'adminEmail' => '',
'caseInsensitiveLogin' => false,
'changePasswordPage' => true,
'changePwdPage' => true,
'hashPassword' => true,
'notifyAdmin' => false,
'notifyUser' => false,
'registerPage' => true,
'remindPage' => false,
'remindPasswordPage' => true,
'sendActivationLink' => false ),
'captchaSettings' => array( 'captchaType' => 0,
'siteKey' => '',
'secretKey' => '',
'passesCount' => 5 ),
'emailSettings' => array( 'fromEmail' => '',
'usePHPDefinedSMTP' => true,
'useBuiltInMailer' => false,
'SMTPServer' => 'localhost',
'SMTPPort' => 25,
'SMTPUser' => '',
'SMTPPassword' => '',
'securityProtocol' => 0 ),
'advancedSecurity' => array( 'allowGuestLogin' => false ),
'auditAndLocking' => array( 'loggingTable' => array( 'connId' => '',
'table' => '' ),
'lockingTable' => array( 'connId' => '',
'table' => '' ),
'tables' => array(  ),
'loggingMode' => 0,
'loggingFile' => 'audit.log',
'logSecurityActions' => false,
'lockAfterUnsuccessfulLogin' => false,
'enableLocking' => false ),
'twoFactorSettings' => array( 'available' => false,
'required' => false,
'enable' => true,
'remember' => true,
'types' => array(  ),
'twoFactorField' => '',
'emailField' => '',
'phoneField' => '',
'codeField' => '',
'projectName' => '' ),
'projectName' => 'derejamev1',
'loginDataSource' => 'derejame_users',
'loginForm' => 0,
'dynamicPermissions' => true,
'dpTablePrefix' => 'derejame_',
'dpTableConnId' => 'deredevatderejadevmerqconsulta',
'hardcodedLogin' => false,
'enabled' => true,
'advancedSecurityAvailable' => true,
'userGroupsAvailable' => true,
'defaultProviderCode' => '00',
'adOnlyLogin' => false,
'dbProvider' => array( 'type' => '%db',
'activationField' => 'active',
'active' => true,
'code' => '00',
'codeField' => '',
'emailField' => 'email',
'extUserIdField' => '',
'fullnameField' => 'fullname',
'label' => array( 'text' => 'Database',
'type' => 0 ),
'name' => 'db',
'passwordField' => 'password',
'phoneField' => '',
'resetDateField' => 'reset_date',
'resetTokenField' => 'reset_token',
'table' => array( 'connId' => 'deredevatderejadevmerqconsulta',
'table' => 'derejame_users' ),
'twoFactorField' => '',
'userGroupField' => 'username',
'usernameField' => 'username',
'userpicField' => 'userpic' ),
'adAdminGroups' => array(  ),
'showUserSource' => false,
'dbProviderCodes' => array( '00' ),
'notifications' => array(  ) );
?>