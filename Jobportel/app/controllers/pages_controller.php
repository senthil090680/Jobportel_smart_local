<?php
class PagesController extends AppController {
	var $name	=	'Pages';
	var $uses	=	array('Rolecategory');
	// get users pages for form
	//function ajax_get_users_pages($id = 2) {
		function ajax_get() {
		// init
		$id = $this->params['form']['id'];
		//exit(0);
		$pages = array();
		$this->layout = null;

		if($id > 0) {
			// get pages
			$pages = $this->Rolecategory->find('list',array('conditions'=>array('Rolecategory.jobcategory_id'=>$id),'fields'=>array('id','role_name')));
			//pr($pages);
			//exit(0);
		}

		// set
		$this->set(compact('pages'));
	}
}?>