<?php
if(!empty($roles)) {
echo $form->input('categoryrole',array(
	'label'=>false,
	'title'=>'Role of each Category. (Required)',
	'type'=>'select',
	'empty'=>'Select...',
	'class'=>'sele',
	'options'=>$roles,
	'div'=>false,
	'multiple'=>'multiple',
	'name'=>'data[Hrpostresume][categoryrole]'
));
}?>