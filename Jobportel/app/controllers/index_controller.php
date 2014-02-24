<?php
class IndexController extends AppController {
	var $name		=	'Index';
	var $uses		=	array();
	function index() {
		$this->set('title_for_layout','Welcome To HRBESTPICK');
	}
}?>