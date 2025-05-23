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
'table' => 'users' ),
'twoFactorField' => '',
'userGroupField' => 'username',
'usernameField' => 'username',
'userpicField' => 'userpic' ) ),
'sessionControl' => array( 'lifeTime' => 30,
'sessionName' => 'LqifVuDerejaT7RrhzvU',
'JWTSecret' => 'pTBgdmk7SrEchwPYJZQF',
'forceExpire' => true,
'keepAlive' => false,
'warnExpire' => true ),
'registration' => array( 'passwordValidation' => array( 'strong' => false,
'minimumLength' => 8,
'uniqueCharacters' => 4,
'digitsAndSymbols' => 2,
'upperAndLowerCase' => false ),
'remindMethod' => 1,
'hashAlgorithm' => 0,
'adminEmail' => 'administrator@merqconsultancy.org',
'caseInsensitiveLogin' => false,
'changePasswordPage' => true,
'changePwdPage' => true,
'hashPassword' => true,
'notifyAdmin' => true,
'notifyUser' => true,
'registerPage' => true,
'remindPage' => true,
'remindPasswordPage' => true,
'sendActivationLink' => true ),
'captchaSettings' => array( 'captchaType' => 1,
'siteKey' => '6LeRAbcpAAAAAPy9LHXavzB-h0Ve7HSt7VY8R6EV',
'secretKey' => '6LeRAbcpAAAAAJFYeJQ-QO6BGTJvZpOiNgvxDdhH',
'passesCount' => 5 ),
'emailSettings' => array( 'fromEmail' => 'dereja@cloud.merqconsultancy.org',
'usePHPDefinedSMTP' => false,
'useBuiltInMailer' => false,
'SMTPServer' => 'cloud.merqconsultancy.org',
'SMTPPort' => 587,
'SMTPUser' => 'dereja@cloud.merqconsultancy.org',
'SMTPPassword' => 'Merq@Dereja7',
'securityProtocol' => 0 ),
'advancedSecurity' => array( 'allowGuestLogin' => false ),
'auditAndLocking' => array( 'loggingTable' => array( 'connId' => 'deredevatderejadevmerqconsulta',
'table' => 'derejame_audit' ),
'lockingTable' => array( 'connId' => 'deredevatderejadevmerqconsulta',
'table' => '˂Create new˃' ),
'tables' => array( 'Candidate_Employment_Tracker' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'Companies' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'CompanySectors' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'Disability_Types' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'Job_Categories' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'Job_Fair' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'Job_Types' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'Jobs' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'Languages' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'Trainer' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'admin_comments' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'admin_members' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'admin_rights' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'admin_users' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'candidates' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'candidates_aggrigated' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'cities' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dashboard_pages' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dashboards' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'database_backup' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'departments' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dereja_academy_lms' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dereja_event_services' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dereja_information_sources' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dereja_services' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dereja_training_services' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'derejame_audit' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'education_levels' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'event_participants' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'events' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'faicons' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'indicator_targets' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'industry_specific_skills' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'institution_types' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'it_related_skills' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'kbarticles' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'kbcategories' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'kbcomments' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'kbusers' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'main' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'minor_major' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'participant_organization_types' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'professions' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'program_areas' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'regions' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'settings' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'skills' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'sub_cities' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'training_city_towns' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'training_organizers' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'training_participants' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'training_types' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'training_venues' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'trainings' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'users' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'utilities' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'webreport_admin' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'webreport_sql' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'webreport_style' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'webreports' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'website_data' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'zones' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ) ),
'loggingMode' => 1,
'loggingFile' => 'audit.log',
'logSecurityActions' => true,
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
'projectName' => 'derejame14',
'loginDataSource' => 'users',
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
'table' => 'users' ),
'twoFactorField' => '',
'userGroupField' => 'username',
'usernameField' => 'username',
'userpicField' => 'userpic' ),
'adAdminGroups' => array(  ),
'showUserSource' => false,
'dbProviderCodes' => array( '00' ),
'notifications' => array( 'enabled' => true,
'table' => array( 'connId' => 'deredevatderejadevmerqconsulta',
'table' => 'derejame_noti' ) ) );
?>