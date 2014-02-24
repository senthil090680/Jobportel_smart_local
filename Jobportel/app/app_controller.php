<?php
/* SVN FILE: $Id$ */
/**
 * Short description for file.
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Short description for class.
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
	var $uses			=	array('Employee');
	var $helpers		=	array('Html','Form','Ajax','Javascript');
	var $components		=	array('Auth','Email','Cookie');

	function beforeFilter() {
		/*$this->Cookie->name = 'location'; 
		$this->Cookie->time =  3600;  // or '1 hour' 
		$this->Cookie->path = '/'; 
		//$this->Cookie->domain = 'localhost'; 
		$this->Cookie->secure = true;  //i.e. only sent if using secure HTTPS 
		$this->Cookie->key = 'qSI232qs*&sXOw!';*/
		
		if ($this->Auth->user('id') != null) {
			
			$user_id = $this->Auth->user('id');
			setcookie('user_type',1);
			//setcookie('User','good');
			//Configure::write('User','godofd');			
		   //echo $usertype = $this->Cookie->read('User');
		   //exit;
		   $this->Employee->recursive = 0;
		   $viewdata			=	$this->Employee->find('first', array('fields'=>array('usertype'),'conditions' => array('Employee.id' => $user_id)));
		   
		   $this->Cookie->write('userid',$this->Auth->user('id'));		   
		   //echo $_COOKIE['User'];
			//exit;

		   //exit();
		}
		$this->Auth->loginAction	=	array('controller'=>'users','action'=>'login');
		$this->Auth->loginRedirect	=	array('controller'=>'users','action'=>'profile');
		$this->Auth->logoutRedirect	=	array('controller'=>'users','action'=>'login');
		//$this->Auth->allow('register','login','index','confirm','add','ajax_get','interviewguide','resumeguide'); //live
		$this->Auth->allow('register','login','index','confirm','add','ajax_get','interviewguide','resumeguide','my','postjobs','postjobsadd');  //not live

		$this->Auth->authorize		=	'controller';
		$this->Auth->userScope		=	array('Employee.confirmed'=>'1');
		$this->Auth->userModel		=	'Employee';
		$this->Auth->fields			=	array('username'=>'email','password'=>'password');
		$this->Auth->loginError		=	'Invalid Username or Password, Try Again!';
		$this->Auth->authError		=	'Please login first! Then access that page';
		$this->set('loggedIn',$this->Auth->user('id'));
	}
	function isAuthorized() {
		return true;
	}
	function pa($arr) {
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}
}?>