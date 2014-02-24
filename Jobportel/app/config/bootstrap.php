<?php
/* SVN FILE: $Id$ */
/**
 * Short description for file.
 *
 * Long description for file
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.10.8.2117
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 *
 * This file is loaded automatically by the app/webroot/index.php file after the core bootstrap.php is loaded
 * This is an application wide file to load any function that is not used within a class define.
 * You can also use this to include or require any files in your application.
 *
 */
/**
 * The settings below can be used to set additional paths to models, views and controllers.
 * This is related to Ticket #470 (https://trac.cakephp.org/ticket/470)
 *
 * $modelPaths = array('full path to models', 'second full path to models', 'etc...');
 * $viewPaths = array('this path to views', 'second full path to views', 'etc...');
 * $controllerPaths = array('this path to controllers', 'second full path to controllers', 'etc...');
 *
 */
//EOF

//feel free to replace these or overwrite in your bootstrap.php 
if (!defined('VALID_EMAIL_JS')) { 
  define('VALID_EMAIL_JS', '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/'); 
} 
//I know the octals should be capped at 255 
if (!defined('VALID_IP_JS')) { 
  define('VALID_IP_JS', '/^[\d]{1,3}\.[\d]{1,3}\.[\d]{1,3}\.[\d]{1,3}$/'); 
} 

//list taken from /cake/libs/validation.php line 497 
if (!defined('DEFAULT_VALIDATION_EXTENSIONS')) { 
  define('DEFAULT_VALIDATION_EXTENSIONS', 'gif,jpeg,png,jpg'); 
} 

//Configure::write('Company.name','Pizza, Inc.');

//Configure::write('FULL_PATH',$html->url( null, true ));

//echo FULL_BASE_URL;  This is CAKE DEFAULT CONSTANT, it will return http://localhost

//echo basename(dirname(APP)); // This will return the root folder of the domain // Jobportel

Configure::write('FULL_PATH',FULL_BASE_URL.'/'.basename(dirname(APP)));  // This is used to write the constant for CAKE

//echo Configure::read('FULL_PATH');  // This is used to read the constant for CAKE

//To read the variable later in any place of your code use: 

//Configure::read('Company.name'); //yields: 'Pizza, Inc.'

?>