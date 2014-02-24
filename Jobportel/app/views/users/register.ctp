<?php 
echo $javascript->link('common');
echo $html->css('common');
?>
<tr>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">     
      <tr>
        <td>&nbsp;</td>
        <td align="left" valign="top" class="jobtitxt">&nbsp;</td>
        <td align="left" valign="top"><span class="jobtitxt">Member/Registered User Benefits...</span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%">&nbsp;</td>
        <td width="50%" align="left" valign="top"><div class="dbgg">
          <?php 
			//echo $form->create('Employee',array('url'=>array('controller'=>'users', 'action'=>'register'),'id'=>'frm_employee','onSubmit'=>'return employee_vali()','name'=>'frm_employee'));
			echo $form->create('Employee',array('url'=>array('controller'=>'users', 'action'=>'register'),'id'=>'frm_employee','name'=>'frm_employee'));
		  
		  ?>
		  <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="4%" align="left" valign="middle">&nbsp;</td>
              <td colspan="2" align="left" valign="middle" class="txt"><strong>
			  <?php if($session->flash()) { echo $session->flash(); } else {?>			  
			  Not registered yet? Sign up now <?php } ?></strong></td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td width="23%" align="left" valign="middle" class="txt">&nbsp;</td>
              <td width="73%" align="left" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle" class="txt">Firstname : </td>
              <td align="left" valign="middle"><?php 
			  echo $form->input('firstname',array('label'=>false,'size'=>'35','maxLength'=>'20','id'=>'firstname','class'=>'inputs validation required'));
				

			  //echo $form->input('firstname', array('size' => '35','label'=>false,'id' => 'firstname','value'=>'','onclick'=> 'test("'.$Employ.'");' , 'value'=>'', 'class'=> 'inputs' )); //Working function for javascript onclick with php parameters			  
			  ?><!-- <input type="text" name="data[Employee][firstname]" id="firstname" size="35" class="inputs" /> -->			  			  
			  </td>
            </tr>
			<tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle" class="txt">&nbsp;</td>
              <td align="left" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle" class="txt">Lastname : </td>
              <td align="left" valign="middle">
			  <?php echo $form->input('lastname',array('label'=>false,'size'=>'35','id'=>'lastname','value'=>'','class'=>'inputs')); ?>			  
			  <!-- <input type="text" name="textfield2" size="35" class="inputs" /> --></td>
            </tr>
			<tr>
              <td align="left" valign="middle" >&nbsp;</td>
              <td align="left" valign="middle" class="txt">&nbsp;</td>
              <td align="left" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle" class="txt">Email Id : </td>
              <td align="left" valign="middle">
			  <?php echo $form->input('email',array('label'=>false,'size'=>'35','id'=>'email','value'=>'','class'=>'inputs')); ?>	<!-- <input type="text" name="textfield22" size="35" class="inputs" /> --></td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle" class="txt">&nbsp;</td>
              <td align="left" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle" class="txt">Password : </td>
              <td align="left" valign="middle">
			  <?php echo $form->input('password',array('label'=>false,'type'=>'password','size'=>'35','value'=>'','id'=>'password','class'=>'inputs')); ?>
			  <!-- <input type="text" name="textfield23" size="35" class="inputs" /> --></td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle" class="txt">&nbsp;</td>
              <td align="left" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle" class="txt">City : </td>
              <td align="left" valign="middle">
			  <?php echo $form->input('city',array('label'=>false,'size'=>'35','id'=>'city','value'=>'','class'=>'inputs')); ?>		  
			  <!-- <input type="text" name="textfield232" size="35" class="inputs" /> --></td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle" class="txt">&nbsp;</td>
              <td align="left" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle" class="txt">Mobile No : </td>
              <td align="left" valign="middle">
			  <?php echo $form->input('telephone',array('label'=>false,'size'=>'35','maxLength'=>'10','id'=>'telephone','value'=>'','class'=>'inputs')); ?>
			  <!-- <input type="text" name="textfield233" size="35" class="inputs" /> --></td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle" class="txt">&nbsp;</td>
              <td align="left" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle" class="txt">&nbsp;</td>
              <td align="left" valign="middle">
			  <?php echo $form->submit('Register',array('class' => 'submit button', 'name'=>'reg','title' => 'Jobseeker Registration'));			 
			  ?>
			  <!-- <button name="reg" onclick="return reg_vali();" type="submit" class="submit button">Register</button> --></td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle" class="txt">&nbsp;</td>
              <td align="left" valign="middle">&nbsp;</td>
            </tr>           
          </table>
		   <?php echo $form->end(); ?>
        </div></td>
        <td width="49%" align="left" valign="top"><div class="dbgg">
          <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
              <tr>
                <td valign="top" width="8%"><div><?php e($html->image('point.png',array('width'=>'19','height'=>'16'))); ?>
				<!-- <img src="images/point.png" width="19" height="16" /> --></div></td>
                <td width="92%" align="left" valign="top" class="txt"><div align="justify"><span class="style1">Create Customized 'Job Alert'</span><br />
                  Get Jobs regularly in your inbox by creating up to 5 personalized Job Alert</div></td>
              </tr>
              <tr>
                <td colspan="2" height="23">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top"><div><?php e($html->image('point.png',array('width'=>'19','height'=>'16'))); ?>				
				<!--<img src="images/point.png" width="19" height="16" /> --></div></td>
                <td align="left" valign="top" class="txt"><div align="justify"><span class="style1">Create Multiple Profiles</span><br />
                  Create upto 5 customized profiles to apply to jobs in different categories</div></td>
              </tr>
              <tr>
                <td colspan="2" height="23">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top"><div><?php e($html->image('point.png',array('width'=>'19','height'=>'16'))); ?>				
				<!--<img src="images/point.png" width="19" height="16" /> --></div></td>
                <td align="left" valign="top" class="txt"><div align="justify"><span class="style1">Let Recruiters find you the right job</span><br />
                  Thousands of recruiters search our database daily to find candidates. Get found by them </div></td>
              </tr>
              <tr>
                <td colspan="2" height="23">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top"><div><?php e($html->image('point.png',array('width'=>'19','height'=>'16'))); ?>
				<!-- <img src="images/point.png" width="19" height="16" /> --></div></td>
                <td align="left" valign="top" class="txt"><div align="justify"><span class="style1">Confidentiality &amp; Privacy Settings</span><br />
                  Define your privacy level. Block your current employer from  accessing your profile. </div></td>
              </tr>
            </tbody>
          </table>
        </div></td>
      </tr>
    </table></td>
</tr>