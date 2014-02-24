<?php
class Jobpost extends AppModel {
	var $name			=	'Jobpost';
	var $hasOne		=	array(
		'Employee'	=>	array(
		'className'		=>	'Employee',
		'conditions'	=>	'',
		'fields'		=>	'',
		'foreignKey'	=>	''
		)
	);
}?>