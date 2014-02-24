<?php
if(!empty($pages)) {
echo $form->input('page_id',array(
	'label'=>'Parent Page: <span>*</span>',
	'title'=>'Parent Page of Page. (Required)',
	'type'=>'select',
	'options'=>$pages,
	'div'=>false,
	'name'=>'data[Page][page_id]'
));
}?>