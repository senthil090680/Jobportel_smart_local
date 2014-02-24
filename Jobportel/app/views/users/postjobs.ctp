<style type="text/css">
<!--
.style1 {	color: #FF0000;
	font-size: 12px;
}
-->
</style>
  <tr>
    <td align="left" valign="top"><div class="dbg">
	<?php echo $form->create('Jobpost',array('url'=> array('controller'=>'users','action'=>'postjobsadd'),'id'=>'addpostjobs','name'=>'addpostjobs'));
			?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="3%">&nbsp;</td>
          <td width="95%" height="0" class="tit">&nbsp;</td>
          <td width="2%">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left" valign="top" class="tit"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="22%" height="35" align="left" valign="middle" class="txt">Job Title<span class="style1"> *</span></td>
                <td width="78%" align="left" valign="middle"><span class="txt">
                  <?php echo $form->input('jobtitle',array('label'=>false,'id'=>'jobtitle','type'=>'text','maxLength'=>'100','class'=>'inputs')); ?>	
                </span></td>
				<td align="left" valign="middle">&nbsp;</td>
				<td height="19" align="left" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="middle">&nbsp;</td>
                <td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" valign="middle" class="txt">Role<span class="style1"> *</span></td>
				<td align="left" valign="middle">
				<?php echo $form->input('titlerole',array('type'=>'select','label'=>false,'value'=>'','options'=>$titlerole,'id'=>'titlerole','empty'=>'Select...','class'=>'sele')); ?>
			   </td>
			   <td align="left" valign="middle">&nbsp;</td>
			   <td align="left" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="middle">&nbsp;</td>
                <td align="left" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" valign="middle" class="txt">Key skills <span class="style1">*</span></td>
                <td align="left" valign="middle"><span class="txt">
				 <?php echo $form->input('keyskills',array('label'=>false,'id'=>'keyskills','type'=>'text','maxLength'=>'100','class'=>'inputs')); ?>	
                </span></td>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle">&nbsp;</td>
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
          <td>&nbsp;</td>
          <td align="left" valign="top" class="tit"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="22%" height="35" align="left" valign="middle" class="txt">Experience <span class="style1">*</span></td>
                <td width="25%" align="left" valign="middle">
				<?php echo $form->input('expmin',array('label'=>false,'empty' => 'Min...','size'=>'1','class'=>'sele','id'=>'expmin','type' => 'select','options' =>array_combine(range(0,12,1),range(0,12,1)))); ?></td>
                <td width="53%" align="left" valign="middle"><?php echo $form->input('expmax',array('label'=>false,'empty' => 'Max...','size'=>'1','class'=>'sele','id'=>'expmax','type' => 'select','options' =>array_combine(range(0,12,1),range(0,12,1)))); ?></td>
              </tr>
          </table></td>
          <td>&nbsp;</td>
		  <td align="left" valign="middle">&nbsp;</td>
		  <td align="left" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left" valign="top" class="tit">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td height="19" align="left" valign="middle" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="22%" height="35" align="left" valign="middle" class="txt">Job Type<span class="style1"> *</span></td>
                <td width="29%" height="35" align="left" valign="middle">
				<?php echo $form->input('jobtype',array('type'=>'select','label'=>false,'value'=>'','options'=>$jobtypeOptions,'id'=>'jobtype','empty'=>'Select...','class'=>'sele')); ?></td>
				<td width="25%" align="left" valign="middle">&nbsp;</td>
				<td width="25%" align="left" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                <td height="19" align="left" valign="middle">&nbsp;</td>
				<td height="19" align="left" valign="middle">&nbsp;</td>
				<td height="19" align="left" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" valign="middle" class="txt">No. of vacancies</td>
                <td height="35" align="left" valign="middle">
				<?php echo $form->input('vacancy',array('label'=>false,'empty' => 'Select...','size'=>'1','class'=>'sele','id'=>'vacancy','type' => 'select','options' =>$vacancyOptions)); ?></td>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="19" align="left" valign="middle">&nbsp;</td>
				<td height="19" align="left" valign="middle">&nbsp;</td>
                <td height="19" align="left" valign="middle">&nbsp;</td>
				<td height="19" align="left" valign="middle">&nbsp;</td>
              </tr>
			  <tr>
				<td align="left" valign="middle" class="txt">Preferred Job Location <span class="style1">*</span></td>
                <td height="35" align="left" valign="middle">
				<?php echo $form->input('joblocation_pre',array('type'=>'select','label'=>false,'value'=>'','options'=>$cities,'multiple'=>'multiple','id'=>'joblocation_pre','empty'=>'Select...','class'=>'sele'));
				?>
				</td>
                <td align="left" valign="middle" class="nor">
				<?php echo $html->link($html->image('add.png',array('width'=>'40','height'=>'30')),'/',array('id'=>'job-add','href'=>'javascript:void(0);'),null,false); ?>
				<br />
                <?php echo $html->link($html->image('remove.png',array('width'=>'40','height'=>'30')),'/',array('id'=>'job-remove','href'=>'javascript:void(0);'),null,false); ?>
				</td>
                <td align="left" valign="middle"><select class="sele" name="data[Jobpost][joblocation][]" id="joblocation" multiple size="5">
				<!-- <td align="left" valign="middle"><select class="sele" name="joblocation" id="joblocation" multiple size="5"> -->
                    <option value='' ></option>
					</select>
				</td> 
             </tr>

              <!-- <tr>
                <td height="35" align="left" valign="middle" class="txt">Job location <span class="style1">*</span></td>
                <td height="35" align="left" valign="middle">&nbsp;</td>
              </tr> -->
              <tr>
                <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                <td height="19" align="left" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" valign="middle" class="txt">Basic Qualification <span class="style1">*</span></td>
                 <td height="35" align="left" valign="middle">
				<?php echo $form->input('ugdegree_pre',array('type'=>'select','label'=>false,'value'=>'','options'=>$ugOptions,'multiple'=>'multiple','id'=>'ugdegree_pre','empty'=>'Select...','class'=>'sele'));
				?>
				</td>
                <td align="left" valign="middle" class="nor">
				<?php echo $html->link($html->image('add.png',array('width'=>'40','height'=>'30')),'/',array('id'=>'ug-add','href'=>'javascript:void(0);'),null,false); ?>
				<br />
                <?php echo $html->link($html->image('remove.png',array('width'=>'40','height'=>'30')),'/',array('id'=>'ug-remove','href'=>'javascript:void(0);'),null,false); ?>
				</td>
                <td align="left" valign="middle"><select class="sele" name="data[Jobpost][ugdegree][]" id="ugdegree" multiple size="5">
                    <option value='' disabled="disabled"></option>
					</select>
				</td> 
              </tr>
              <tr>
                <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                <td height="19" align="left" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" valign="middle" class="txt">PG Qualification</td>
                 <td height="35" align="left" valign="middle">
				<?php echo $form->input('pgdegree_pre',array('type'=>'select','label'=>false,'value'=>'','options'=>$pgOptions,'multiple'=>'multiple','id'=>'pgdegree_pre','empty'=>'Select...','class'=>'sele'));
				?>
				</td>
                <td align="left" valign="middle" class="nor">
				<?php echo $html->link($html->image('add.png',array('width'=>'40','height'=>'30')),'/',array('id'=>'pg-add','href'=>'javascript:void(0);'),null,false); ?>
				<br />
                <?php echo $html->link($html->image('remove.png',array('width'=>'40','height'=>'30')),'/',array('id'=>'pg-remove','href'=>'javascript:void(0);'),null,false); ?>
						</td>
                <td align="left" valign="middle"><select class="sele" name="data[Jobpost][pgdegree][]" id="pgdegree" multiple size="5">
                    <option value='' disabled="disabled"></option>
					</select>
				</td> 
              </tr>
              <tr>
                <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                <td height="19" align="left" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" valign="middle" class="txt">Job Description <span class="style1">*</span></td>
                <td height="35" align="left" valign="middle"><label>
                  <?php echo $form->input('jobdescrip',array('label'=>false,'id'=>'jobdescrip','maxlength'=>'1000','class'=>'inputst','type'=>'textarea')); ?>
                </label></td>
              </tr>
              <tr>
                <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                <td height="19" align="left" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" valign="middle" class="txt">Walkin interview&nbsp;</td>
                <td height="35" align="left" valign="middle"><label>
				<?php echo $form->input('walkin',array('label'=>false,'id'=>'walkin','type'=>'checkbox')); ?>
                </label></td>
              </tr>
          </table></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left" valign="top" class="tit">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left" valign="top" class="txt"><strong>Contact Details </strong></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left" valign="top" class="tit">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left" valign="top" class="tit"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="22%" height="35" align="left" valign="middle" class="txt">Company name <span class="style1">*</span></td>
                <td width="78%" align="left" valign="middle"><span class="txt">
                  <?php echo $form->input('companyname',array('label'=>false,'type'=>'text','id'=>'companyname','maxlength'=>'100','class'=>'inputs')); ?>
                </span></td>
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
          <td>&nbsp;</td>
          <td align="left" valign="top" class="tit"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="22%" height="35" align="left" valign="middle" class="txt">Website</td>
                <td width="35%" align="left" valign="middle"><span class="txt">
				<?php echo $form->input('website',array('id'=>'website','class'=>'inputs','type'=>'text','maxlength'=>'150','label'=>false)); ?>
                </span></td>
                <td width="18%" align="left" valign="middle" class="txt">Phone Number </td>
                <td width="25%" align="left" valign="middle"><span class="txt">
                  <?php echo $form->input('phonenum',array('id'=>'phonenum','label'=>false,'type'=>'text','maxlength'=>'12','class'=>'inputs')); ?>
                </span></td>
              </tr>
              <tr>
                <td height="19" align="left" valign="middle">&nbsp;</td>
                <td align="left" valign="middle">&nbsp;</td>
                <td align="left" valign="middle">&nbsp;</td>
                <td align="left" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" valign="middle" class="txt">Contact Person <span class="style1">*</span></td>
                <td align="left" valign="middle"><span class="txt">
                  <?php echo $form->input('contactperson',array('id'=>'contactperson','label'=>false,'type'=>'text','class'=>'inputs','maxlength'=>'100')); ?>
                </span></td>
                <td align="left" valign="middle" class="txt">Mobile No <span class="style1">*</span></td>
                <td align="left" valign="middle"><span class="txt">
				<?php echo $form->input('mobilenum',array('id'=>'mobilenum','label'=>false,'type'=>'text','maxlength'=>'10','class'=>'inputs')); ?>
                </span></td>
              </tr>
              <tr>
                <td height="19" align="left" valign="middle">&nbsp;</td>
                <td align="left" valign="middle">&nbsp;</td>
                <td align="left" valign="middle">&nbsp;</td>
                <td align="left" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" valign="middle" class="txt">Email ID <span class="style1">*</span></td>
                <td align="left" valign="middle"><span class="txt">
					<?php echo $form->input('emailid',array('id'=>'emailid','label'=>false,'type'=>'text','maxlength'=>'100','class'=>'inputs')); ?>
                </span></td>
                <td align="left" valign="middle">&nbsp;</td>
                <td align="left" valign="middle">&nbsp;</td>
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
          <td>&nbsp;</td>
          <td align="left" valign="top" class="txt"><strong>Create your Username & Password</strong></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left" valign="top" class="tit"></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left" valign="top" class="tit"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="22%" height="35" align="left" valign="middle" class="txt">Username<span class="style1">*</span></td>
              <td width="78%" align="left" valign="middle"><span class="txt">
                <?php echo $form->input('empuser',array('label'=>false,'id'=>'empuser','type'=>'text','class'=>'inputs','maxLength'=>'100',)); ?>				
              </span></td>
            </tr>
            <tr>
              <td height="35" align="left" valign="middle" class="txt">Password<span class="style1">*</span></td>
              <td align="left" valign="middle"><span class="txt">
				<?php echo $form->input('emppass',array('label'=>false,'id'=>'emppass','type'=>'text','maxlength'=>'6','class'=>'inputs')); ?>
              </span></td>
            </tr>
			<tr>
              <td height="35" align="left" valign="middle" class="txt">&nbsp;</td>
              <td align="left" valign="middle"><span class="txt">
				<?php echo $form->submit('Post Jobs',array('name'=>'postjobssub','id'=>'postjobssub','title' => 'Post Your Jobs For Free')); ?>
              </span></td>
            </tr>
				  

          </table></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left" valign="top" class="tit"></td>
          <td>&nbsp;</td>
        </tr>
      </table>    
	 <?php 
	  //echo $form->button('Post Resume',array('name'=>'postresumesub','id'=>'postresumesub','title' => 'Post Your Jobs For Free')); 
	  echo $form->end();
	  ?>
    </div></td>
  </tr>