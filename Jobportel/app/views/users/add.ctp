<?php //$javascript->link('jquery');
echo $javascript->link('ajaxcall');
echo $form->create('Jobcategory',array('class'=>'ajax_page'));?>
	<fieldset>
 		<legend>Add Page</legend>
		<div class="ajax_loading_image"></div>
		<?php
		/*echo $form->input('category123',array(
			'label'=>'User: <span>*</span>',
			'title'=>'User of Page. (Required)'
		));*/

		echo $form->input('category',array('type'=>'select','label'=>'Category: <span>*</span>','options'=>$jobcategories,'empty'=>'Select...',
		'class'=>'sele',
		)); 

		echo $form->input('page_id',array(
			'label'=>'Parent Page: <span>*</span>',
			'title'=>'Parent Page of Page. (Required)',
			'div'=>'input select ajax_page_id'
		));
// more fields...
echo $form->end();?>