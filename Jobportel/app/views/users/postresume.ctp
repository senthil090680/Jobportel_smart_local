<?php echo $javascript->link('ajaxcall'); ?>
<tr>
    <td align="left" valign="top"><div class="dbg">	
			<?php echo $form->create('Hrpostresume',array('url'=> array('controller'=>'users','action'=>'ajaxresume_submit'),'id'=>'posthr','type'=>'file','enctype'=>'multipart/part-data','name'=>'posthr'));
			?>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				
			  <tr>
                <td width="3%"><div id='testdiv'></div><span id="showmsg" style="display:none;"><?php 				
				echo $html->image('ajax-loader.gif',array('width'=>'220','height'=>'120','border'=>'0')); ?><br/>
	<label>Please wait the file is being uploaded to the server to get the results</label></span></td>
                <td width="95%" height="0" class="tit"><span class="red"> <div class="red" id="div_pres"></div>
				<?php if($err!='') { echo $err; }
			else { }
			?></span>            </td>
                <td width="2%">&nbsp;</td>
              </tr>
              <tr>
                <td width="3%">&nbsp;</td>
                <td width="95%" height="0" class="tit">&nbsp;</td>
                <td width="2%">&nbsp;</td>
              </tr>
              
              <tr>
                <td>&nbsp;</td>
                <td align="left" valign="top" class="tit">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="28%" align="left" valign="middle" class="txt">Experience <span class="style1">*</span></td>
                    <td width="27%" align="left" valign="middle">				
					<?php echo $form->input('exp_year',array('label'=>false,'empty' => 'Years...','size'=>'1','class'=>'sele','id'=>'exp_year','type' => 'select','options' =>array_combine(range(0,12,1),range(0,12,1)))); ?></td>
                    <td width="36%" align="left" valign="middle">
					<?php echo $form->input('exp_month',array('label'=>false,'empty' => 'Months...','class'=>'sele','id'=>'exp_month','type' => 'select','options' =>array_combine(range(0,12,1),range(0,12,1)))); ?></td>
                    <td width="9%" align="left" valign="middle"><?php echo $form->input('employee_id',array('label'=>false,'id'=>'employee_id','type'=>'hidden','value'=>$loggedIn)); ?></td>
                  </tr>
                </table></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left" valign="top" class="tit"></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top">&nbsp;</td>
                <td align="left" valign="top" class="tit"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" valign="middle" class="txt">Your name</td>
                    <td height="35" align="left" valign="middle"><span class="nor">
                      <?php echo $form->input('myname',array('label'=>false,'id'=>'myname','type'=>'text','maxLength'=>'100','class'=>'inputs')); ?>					  
                    </span></td>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr>
				    <tr>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td height="19" align="left" valign="middle">&nbsp;</td>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr>
				  <tr>
                    <td align="left" valign="middle" class="txt">Company name</td>
                    <td height="35" align="left" valign="middle"><span class="nor">
                      <?php echo $form->input('companyname',array('label'=>false,'id'=>'companyname','type'=>'text','class'=>'inputs')); ?>					  
                    </span></td>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td height="19" align="left" valign="middle">&nbsp;</td>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="28%" align="left" valign="middle" class="txt">Current Job Location&nbsp;&nbsp;</td>
                    <td width="32%" height="35" align="left" valign="middle">
					<?php echo $form->input('joblocation',array('type'=>'select','label'=>false,'value'=>'','options'=>$cities,'id'=>'joblocation','empty'=>'Select...','class'=>'sele')); ?>
					</td>
                  </tr>                          
                  <tr>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td height="19" align="left" valign="middle">&nbsp;</td>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr>
				<tr>
					<td align="left" valign="middle" class="txt">Job category <span class="style1">*</span></td>
					<td height="35" colspan="3" align="left" valign="middle">
					<?php echo $form->input('category',array('type'=>'select','label'=>false,'value'=>'','options'=>$jobcategories,'id'=>'category','empty'=>'Select...','class'=>'sele')); 
					?>
					</td>
                </tr>
                  <tr>
                    <td align="left" valign="middle" class="txt">Role<span class="style1">*</span></td>
                    <td height="19" align="left" valign="middle"><div class='ajax_role_id'><select class="sele" name="data[Hrpostresume][categoryrole][]" id="categoryrole" multiple="multiple" size="5" >
                      
                   
                    </select></div></td>
                    <td align="left" valign="middle" class="nor">
					<!-- <a href="JavaScript:void(0);" id="role-add">Add &raquo;</a> -->
                     <?php echo $html->link($html->image('add.png',array('width'=>'40','height'=>'30')),'/',array('id'=>'role-add','href'=>'javaScript:void(0);'),null,false); 
					 ?><br />
					  <?php echo $html->link($html->image('remove.png',array('width'=>'40','height'=>'30')),'/',array('id'=>'role-remove','href'=>'javaScript:void(0);'),null,false);	?>
					  </td>
                    <td align="left" valign="middle"><select class="sele" name="data[Hrpostresume][rolesel][]" id="rolesel" multiple="multiple" size="5">
                      <option value='' disabled="disabled"></option>
                    </select></td> 
                  </tr>
                  <tr>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td height="19" align="left" valign="middle">&nbsp;</td>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="35" align="left" valign="middle" class="txt">Key skills</td>
                    <td height="19" align="left" valign="middle"><span class="nor">
                      <?php echo $form->input('keyskills',array('label'=>false,'id'=>'keyskills','type'=>'text','class'=>'inputs')); ?>
                    </span></td>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td height="19" align="left" valign="middle">&nbsp;</td>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr>
				<tr>
				 <td align="left" valign="middle" class="txt">Preferred job location <span class="style1">*</span></td>
                    <td height="35" align="left" valign="middle">
		<?php echo $form->input('joblocation_pre',array('type'=>'select','label'=>false,'value'=>'','options'=>$cities,'multiple'=>'multiple','id'=>'joblocation_pre','empty'=>'Select...','class'=>'sele'));
		?>
				</td>
                     <td align="left" valign="middle" class="nor">
					 <?php echo $html->link($html->image('add.png',array('width'=>'40','height'=>'30')),'/',array('id'=>'jobpre-add','href'=>'javascript:void(0);'),null,false); ?>
					 <br />
					 <?php echo $html->link($html->image('remove.png',array('widht'=>'40','height'=>'30')),'/',array('id'=>'jobpre-remove','href'=>'javascript:void(0);'),null,false); ?>
                     </td>
                    <td align="left" valign="middle"><select class="sele" name="data[Hrpostresume][jobpresel][]" id="jobpresel" multiple size="5">
                    <option value='' disabled="disabled"></option>
                    					</select></td> 
                  </tr>
                  <tr>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td height="19" align="left" valign="middle">&nbsp;</td>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="left" valign="middle" class="txt">Job Type <span class="style1">*</span></td>
                    <td height="35" align="left" valign="middle">
					<?php echo $form->input('jobtype',array('label'=>false,'empty' => 'Select...','class'=>'sele','id'=>'jobtype','type' => 'select','options' =>$jobtypeOptions)); ?>
					</td>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td height="19" align="left" valign="middle">&nbsp;</td>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="left" valign="middle" class="txt">Qualification<span class="style1"> *</span></td>
                    <td height="35" align="left" valign="middle"><span class="nor">

				<?php echo $form->input('ug_qualification',array('type'=>'select','label'=>false,'empty'=>'--------------------UG--------------------','id'=>'ug_qualification','options'=>$ugOptions,'class'=>'sele')); ?>
                    </span></td>
                    <td colspan="2" align="left" valign="middle" class="txt"><span class="nor">
				<?php echo $form->input('pg_qualification',array('type'=>'select','label'=>false,'empty'=>'--------------------PG--------------------','id'=>'pg_qualification','options'=>$pgOptions,'class'=>'sele')); ?>
                    </span></td>
                  </tr>
                  <tr>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td height="19" align="left" valign="middle">&nbsp;</td>
                    <td align="left" valign="middle" class="nor">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr>
                </table></td>
                <td>&nbsp;</td>
              </tr>
             
              <tr>
                <td>&nbsp;</td>
                <td align="left" valign="top" class="tit"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="28%" height="35" align="left" valign="middle" class="txt">Resume Title<span class="style1"> *</span></td>
                    <td width="72%" align="left" valign="middle"><span class="nor">
                      <?php echo $form->input('resumetitle',array('type'=>'text','label'=>false,'id'=>'resumetitle','class'=>'inputs')); ?>
                    </span></td>
                  </tr>
                  <tr>
                    <td align="left" valign="middle" >&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="35" align="left" valign="middle" class="txt">Default Resume<span class="style1">*</span></td>
                    <td align="left" valign="middle"><label>
					<?php echo $form->input('primaryresume',array('label'=>false,'div'=>false,'hiddenField'=>false,'checked'=>$primary_checked,'disabled'=>$primary_disabled,'type' => 'checkbox','id'=>'primaryresume','value'=>'yes')); ?>
                    </label></td>
                  </tr>
				  <tr>
                    <td height="35" align="left" valign="middle" class="txt">Upload resume <span class="style1">*</span></td>
                    <td align="left" valign="middle"><label>
					<?php echo $form->input('resume',array('type'=>'file','label'=>false,'id'=>'resume')); ?>
                    </label></td>
                  </tr>
                </table></td>
                <td>&nbsp;</td>
              </tr>
              <!-- <tr>
                <td height="35" colspan="3" align="left" valign="middle" ><span style="color:#CCCCCC">-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------</span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td height="35" align="left" valign="middle" class="nor"><strong>Contact Details </strong></td>
                <td>&nbsp;</td>
              </tr> -->
              <tr>
                <td>&nbsp;</td>
                <td align="left" valign="top" class="tit"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <!-- <tr>
                    <td width="28%" height="35" align="left" valign="middle" class="txt">Email ID <span class="style1">* </span></td>
                    <td width="33%" align="left" valign="middle"><span class="nor">
                  					<?php echo $form->input('emailid',array('type'=>'text','label'=>false,'id'=>'emailid','class'=>'inputs')); ?>
                    </span></td>
                    <td width="12%" align="left" valign="middle" class="txt">Mobile number</td>
                    <td width="27%" align="left" valign="middle"><span class="nor">
                  					<?php echo $form->input('mobileno',array('type'=>'text','label'=>false,'id'=>'mobileno','maxlength'=>'10','class'=>'inputs')); ?>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="35" align="left" valign="middle" class="txt">Landline number</td>
                    <td align="left" valign="middle"><span class="nor">
                  					<?php echo $form->input('phoneno',array('type'=>'text','label'=>false,'id'=>'phoneno','maxlength'=>'12','class'=>'inputs')); ?>
                    </span></td>
                    <td align="left" valign="middle">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr> -->
				  <tr>
                    <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr>
				   <tr>
                    <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr>
				   <tr>
                    <td height="35" align="left" valign="middle" class="txt">&nbsp;</td>
                    <td align="middle" valign="middle">
                      <?php 
					  
					  //echo $form->submit('Post Resume',array('name'=>'postresume','id'=>'postresume','title' => 'Post Your Resume For Free','onclick'=>'return postresume_vali();')); 
					  echo $form->button('Post Resume',array('name'=>'postresumesub','id'=>'postresumesub','title' => 'Post Your Resume For Free')); 
					  //echo $form->end();
					  ?>
					  </td>
                    <td align="left" valign="middle">&nbsp;</td>
                    <td align="left" valign="middle">&nbsp;</td>
                  </tr>
                
                </table>				</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left" valign="top" class="tit">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left" valign="top" class="tit">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left" valign="top" class="tit"></td>
                <td>&nbsp;</td>
              </tr>
            
            </table>
    </div></td>
</tr>