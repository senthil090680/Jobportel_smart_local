<?php
class Employee extends AppModel {
	var $name			=	'Employee';
	var $hasMany		=	array(
		'Hrpostresume'	=>	array(
		'className'		=>	'Hrpostresume',
		'conditions'	=>	'',
		'fields'		=>	'',
		'foreignKey'	=>	''
		)
	);
	var $validate	=	array(
		'email'=>array(
			'notempty'	=>	array(
				'rule'			=>	array('minLength'=>1),
				'required'		=>	true,
				'allowEmpty'	=>	false,
				'message'		=>	'Please enter a valid email'),
			'unique' => array(
				'rule' => array('checkUnique', 'email'),
				'message' => 'Email is already registered. Use another one'
			)
		),
		'password'	=>	array(
			'notempty'	=>	array(
				'rule'			=>	array('minLength'=>1),
				'required'		=>	true,
				'allowEmpty'	=>	false,
				'message'		=>	'Please enter a password'),
			/*'passwordSimilar'	=> array(
				'rule'				=>	'checkPasswords',
				'message'			=>	'Different password re entered.'
				)*/
		)
	);	
	function checkUnique($data, $fieldName) {
		$valid = false;
		if(isset($fieldName) && $this->hasField($fieldName)) {
			$valid = $this->isUnique(array($fieldName => $data));
		}
		return $valid;
	}
	/*function checkPasswords($data) {
		if($data['password'] == $this->data['Employee']['password2hashed'])
			return true;
		return false;
	}*/
}?>