<?php class AjaxcallroleController extends AppController {
	var $name	=	'Ajaxcallrole';
	var $uses	=	array('Rolecategory');
	// get users pages for form
	function ajax_get() {
		// init
		$id = $this->params['form']['id'];
		$roles = array();
		$this->layout = null;
		if($id > 0) {
			// get pages
			$roles = $this->Rolecategory->find('list',array('conditions'=>array('Rolecategory.jobcategory_id'=>$id),'fields'=>array('id','role_name')));
			//pr($pages);
			//exit(0);
		}
		// set
		$this->set(compact('roles'));
	}
}?>