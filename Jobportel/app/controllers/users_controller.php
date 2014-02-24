<?php
class UsersController extends AppController {
	var $name			=	'Users';
	var $uses			=	array('Employee','Citiessearch','Jobcategory','Hrpostresume');
	//var $uses			=	array('Employee','Citiessearch');
	//var $components	=	array('Auth','Email');	

	function register() {
		
		//echo $this->here;
		$this->set("title_for_layout",'User Registration');
		$this->set('Employ', 'good one');
		if(!empty($this->data)) {
			//$this->data['Employee']['password'] = $this->Auth->password($this->data['Employee']['password']);
			$this->data['Employee']['confirm_code'] = String::uuid();
			$this->data['Employee']['confirmed']	= '1';
			$this->data['Employee']['usertype']	= 1;
			$this->data['Employee']['inserteddate']	= date('Y-m-d H:i:s');
			
			//print_r($this->data);
			//exit(0);

			$this->Employee->create();
			if(!$this->Employee->save($this->data)) {
				//echo mysql_error();
				//exit;
				$this->Session->setFlash('Your details not added yet, Please try again!');
			} else {
				//print_r($this->data);
				$this->Auth->password($this->data['Employee']['password']);
				$this->Auth->login($this->data);
				
				$this->Cookie->write('user_id',$this->Employee->getLastInsertId());
				$this->Cookie->write('user_msg','Congratulations! You have successfully registered your account.');
				$this->redirect(array('controller'=>'users','action'=>'my'));
				exit(0);
				/*$this->Email->to					=	$this->data[Employee][email];
				$this->Email->subject				=	"HRBESTPICK Confirmation";
				$this->Email->replyTo				=	'noreply@hrbestpick.com';
				$this->Email->from					=	'HRBESTPICK <noreply@hrbestpick.com>';
				$this->Email->sendAs				=	'html';
				$this->Email->template				=	'confirmation';
				$this->set('name',$this->data[Employee][firstname]);
				$this->set('lastname',$this->data[Employee][lastname]);
				$this->set('server_name',$_SERVER[SERVER_NAME]);
				$this->set('id',$this->Employee->getLastInsertID());
				$this->set('code',$this->data[Employee][confirm_code]);
				if($this->Email->send()) {
					$this->Session->setFlash('Congratulations! You have signed up! Please Check Your Mail to Activate Your Account');
					$this->redirect(array('controller'=>'users','action'=>'register'));
					exit(0);
				} else {
					$this->Employee->del($this->Employee->getLastInsertID());
					$this->Session->setFlash('There was a problem sending the confirmation mail. Please try again');
				}*/				
			}
		}
	}
	function confirm($user_id =null,$code=null) {
		if(empty($user_id) && empty($code)) {
			$this->set('confirmed',0);
			$this->render();
		}
		$user		=	$this->Employee->read(null,$user_id);
		if(empty($user)) {
			$this->set('confirmed',0);
			$this->render();
		}
		if($user[Employee][confirm_code] == $code) {
			$this->Employee->id		=	$user_id;
			$this->Employee->saveField('confirmed','1');
			$this->set('confirmed',1);
			$this->set('title_for_layout','Account Confirmation');
		} else { 
			$this->set('title_for_layout','Invalid Account');
			$this->set('confirmed',0);
		}
	}
	function login() {
		//echo "erwerwe";
		//exit(0);

		if($this->data) {			
			debug($this->data);	
			debug($this->Auth);
			debug(Configure::version());
			debug($this->Auth->request->data['Employee']['password']);
			debug($this->Auth->request->data['Employee']['email']);
			if ($this->Auth->login()) {									
				debug($this->Auth->request->data['Employee']['password']);

				/*if ($this->Auth->user()) {
					$this->redirect(array('controller'=>'users','action'=>'register'));
				}*/

				//$this->Cookie->write('User','good');
			   /*if ($this->Cookie->read('User') != null) {
				  $this->Cookie->delete('User');
			   }*/
				$this->redirect($this->Auth->redirect());
			} else {
				debug($this->Auth->request->data['Employee']['password']);
				//$this->Session->setFlash('Invalid username or password, try again','default',array('class'=>'myclass'));
				//$this->Session->setFlash(__('Invalid username or password, try again'));
			}
		}
		$this->set('title_for_layout','Jobseeker Login Area');
	}
	function logout() {
		setcookie('user_type','');
		$_COOKIE['user_type']	=	'';
		$this->Session->setFlash('Logout');
		$this->redirect($this->Auth->logout());
	}
	function postresume() {

		if($_COOKIE[user_type] != 1) {
			$this->redirect(array('controller'=>'index','action'=>'index'));
		}


		$cities							=		$this->Citiessearch->find('list',array('fields'=>array('city_name','city_name')));  //This is to generate city name for value in the select box and city name in the select option for users
	
		$primary_status					=	$this->Hrpostresume->find('list', array('fields'=>array('primaryresume'),'conditions' => array('Hrpostresume.employee_id' => $this->Auth->user('id'))));
			
		//$this->pa($primary_status);
		//echo $this->Auth->user('id');
		//exit;
		//$cities						=		$this->Citiessearch->find('list',array('fields'=>array('id','city_name')));  This is to generate id for value in the select box and city name in the select option for users

		$this->set(compact('cities'));	

		$jobcategories				=		$this->Jobcategory->find('list',array('fields'=>array('id','category_name')));
		$this->set(compact('jobcategories'));	

		$this->set('jobtypeOptions', array('Full Time' => 'Full Time', 'Part Time' => 'Part Time', 'Freelancing' => 'Freelancing'));

		$this->set('ugOptions', array('B.A' => 'B.A', 'B.B.A' => 'B.B.A', 'B.com' => 'B.com','B.ED' => 'B.ED','B.Pharam' => 'B.Pharam','B.Sc' => 'B.Sc','B.E' => 'B.E','B.Tech' => 'B.Tech','Other Graduates' => 'Other Graduates','Not Graduates' => 'Not Graduates'));

		$this->set('pgOptions',array('M.A' => 'M.A', 'M.B.A' => 'M.B.A', 'M.C.A' => 'M.C.A','M.com' => 'M.com','M.ED' => 'M.ED','M.Pharam' => 'M.Pharam','M.Sc' => 'M.Sc','M.E' => 'M.E','M.Tech'=>'M.Tech','Others' => 'Others'));

		$this->set('title_for_layout','POST YOUR RESUMES WITH EASE');

		if(empty($primary_status)) {
			$this->set('primary_checked',TRUE);
			$this->set('primary_disabled',TRUE);
		} else {
			$this->set('primary_checked',FALSE);
			$this->set('primary_disabled',FALSE);
		}
	}
	/*function add() {
		$jobcategories				=		$this->Jobcategory->find('list',array('fields'=>array('id','category_name')));
		$this->set(compact('jobcategories'));	

		//$rolecategories				=		$this->Rolecategory->find('list',array('fields'=>array('id','role_name')));
		//$this->set(compact('rolecategories'));	

		$this->set('title_for_layout','POST YOUR RESUMES WITH EASE');
	}*/
	function ajaxresume_submit() {

		// prints out an array
		
		//echo $this->data[Hrpostresume][resume][tmp_name];

		//$this->pa($this->data);

		//echo $this->data[Hrpostresume][primaryresume];
		//exit;

		/*printing error message to the log file starts here */

		//make sure debug is set to 2 in config/core.php

		//print error messages to the log file like so:

		//$this->log(print_r($this->Video->validationErrors, true));

		/*printing error message to the log file ends here */

		//echo $this->data[Hrpostresume][primaryresume];

		if($this->data[Hrpostresume][primaryresume] == 'yes') {
			$user_id		=	$this->Auth->user('id');
			$this->Hrpostresume->updateAll(array('Hrpostresume.primaryresume' => "'no'"),array('Hrpostresume.employee_id' => $user_id));
			//echo mysql_error();
			//exit;
		} else {
		}
		
		$this->data[Hrpostresume][rolesel]			=	implode(',',$this->data[Hrpostresume][rolesel]);
		$this->data[Hrpostresume][jobpresel]		=	implode(',',$this->data[Hrpostresume][jobpresel]);
		$this->data[Hrpostresume][resume][name]		=	str_ireplace(' ','',$this->data[Hrpostresume][resume][name]);
		$resume_name								=	rand()."_".$this->data[Hrpostresume][resume][name];
		$resume_url									=	WWW_ROOT."resume/".$resume_name;

		if(file_exists($this->data[Hrpostresume][resume][tmp_name])) {
			//echo "<br/> exists";
		} else {
			echo "<br/> File does not exists";
		}

		if(move_uploaded_file($this->data[Hrpostresume][resume][tmp_name],$resume_url)) {
			//echo "<br/> moved";
		} else {
			echo "<br/> Resume does not move"; exit;
		}

		$this->data[Hrpostresume][resume]		=	$resume_name;
		//$this->data[Hrpostresume][myname]		=	$this->data[Hrpostresume][myname];
		//$this->data[Hrpostresume][primaryresume]		=	$this->data[Hrpostresume][primaryresume];

		$postdata	=	$this->data;

		$this->Hrpostresume->create();
		if(!$this->Hrpostresume->save($postdata)) {
			$this->layout = null;
			$this->Session->setFlash('Your resume not posted, Please try again!');
			$this->autoRender = false;
			$this->redirect(array('controller'=>'users','action'=>'postresume'));
		} else {
			$this->layout = null;
			$this->autoRender = false;

			echo "/".basename(dirname(APP))."/users/profile/".$this->Hrpostresume->getLastInsertId()."/";
			
			//$this->autoRender = false;
			//$this->Session->setFlash('Congratulations! You have successfully posted your resume!');
			//$this->redirect(array('controller'=>'users','action'=>'profile',urlencode($this->data['Hrpostresume'][id])));
			exit(0);
		}
	}
	function profile($id = 0) {
		$id		=	$this->Cookie->read('userid');
		//$id		=	38;
		$this->set("title_for_layout",'YOUR PROFILE PAGE');
		$this->Hrpostresume->recursive = -1;
		$viewdata			=	$this->Hrpostresume->find('all', array('conditions' => array('Hrpostresume.employee_id' => $id)));		
		//$this->pa($viewdata);
		// prints out an array
		// output of $this->pa($this->data);
		$this->set("viewdata",$viewdata);
	}
	function interviewguide() {
		$this->set("title_for_layout",'INTERVIEW GUIDELINES');
	}
	function resumeguide() {
		$this->set("title_for_layout",'RESUME GUIDELINES');
	}
	function postjobs() {
		$this->set('titlerole', array('1' => 'Database Administrator', '2' => 'BPO', '3' => 'Education & Teaching','4' => 'Engineering', '5' => 'IT'));
		$this->set('jobtypeOptions', array('Full Time' => 'Full Time', 'Part Time' => 'Part Time', 'Freelancing' => 'Freelancing'));
		$this->set('vacancyOptions', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10+' => '10+'));
		$this->set('ugOptions', array('B.A' => 'B.A', 'B.B.A' => 'B.B.A', 'B.com' => 'B.com','B.ED' => 'B.ED','B.Pharam' => 'B.Pharam','B.Sc' => 'B.Sc','B.E' => 'B.E','B.Tech' => 'B.Tech','Other Graduates' => 'Other Graduates','Not Graduates' => 'Not Graduates'));

		$this->set('pgOptions',array('M.A' => 'M.A', 'M.B.A' => 'M.B.A', 'M.C.A' => 'M.C.A','M.com' => 'M.com','M.ED' => 'M.ED','M.Pharam' => 'M.Pharam','M.Sc' => 'M.Sc','M.E' => 'M.E','M.Tech'=>'M.Tech','Others' => 'Others'));

		$cities							=		$this->Citiessearch->find('list',array('fields'=>array('city_name','city_name')));  //This is to generate city name for value in the select box and city name in the select option for users
	
		$this->set(compact('cities'));
		$this->set("title_for_layout",'POST YOUR JOBS TO MAKE RECRUITMENT FOR YOUR PLACEMENT');
	}
	function postjobsadd() {
		$this->data[Hrpostresume][rolesel]			=	implode(',',$this->data[Hrpostresume][rolesel]);
		$this->data[Hrpostresume][jobpresel]		=	implode(',',$this->data[Hrpostresume][jobpresel]);
		$this->data[Hrpostresume][resume][name]		=	str_ireplace(' ','',$this->data[Hrpostresume][resume][name]);
		$resume_name								=	rand()."_".$this->data[Hrpostresume][resume][name];
		$resume_url									=	WWW_ROOT."resume/".$resume_name;

		if(file_exists($this->data[Hrpostresume][resume][tmp_name])) {
			//echo "<br/> exists";
		} else {
			echo "<br/> File does not exists";
		}

		if(move_uploaded_file($this->data[Hrpostresume][resume][tmp_name],$resume_url)) {
			//echo "<br/> moved";
		} else {
			echo "<br/> Resume does not move"; exit;
		}

		$this->data[Hrpostresume][resume]		=	$resume_name;
		//$this->data[Hrpostresume][myname]		=	$this->data[Hrpostresume][myname];
		//$this->data[Hrpostresume][primaryresume]		=	$this->data[Hrpostresume][primaryresume];

		$postdata	=	$this->data;

		$this->Hrpostresume->create();
		if(!$this->Hrpostresume->save($postdata)) {
			$this->layout = null;
			$this->Session->setFlash('Your resume not posted, Please try again!');
			$this->autoRender = false;
			$this->redirect(array('controller'=>'users','action'=>'postresume'));
		} else {
			$this->layout = null;
			$this->autoRender = false;

			echo "/".basename(dirname(APP))."/users/profile/".$this->Hrpostresume->getLastInsertId()."/";
			
			//$this->autoRender = false;
			//$this->Session->setFlash('Congratulations! You have successfully posted your resume!');
			//$this->redirect(array('controller'=>'users','action'=>'profile',urlencode($this->data['Hrpostresume'][id])));
			exit(0);
		}
		$this->set("title_for_layout",'POST YOUR JOBS TO MAKE RECRUITMENT FOR YOUR PLACEMENT');
	}
	function my(){
		$this->set('user_id',$this->Cookie->read('user_id'));
		$this->set('user_msg',$this->Cookie->read('user_msg'));
		$this->Cookie->del('user_id');
		$this->Cookie->del('user_msg');
	}
}?>