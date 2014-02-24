<?php
class Hrpostresume extends AppModel {
	var $name			=	'Hrpostresume';
	var $hasOne		=	array(
		'Employee'	=>	array(
		'className'		=>	'Employee',
		'conditions'	=>	'',
		'fields'		=>	'',
		'foreignKey'	=>	''
		)
	);
}?>