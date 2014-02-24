<?php echo $javascript->link('common'); 
echo $html->css('common'); 
?>
  <tr>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">     
      <tr>
        <td>&nbsp;</td>
        <td align="left" valign="top" class="jobtitxt">Member/Registered User Benefits...</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%">&nbsp;</td>
        <td width="50%" align="left" valign="top"><div class="dbgg">
          <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
              <tr>
                <td valign="top" width="8%"><div>
				<?php echo $html->image('point.png',array('width'=>'19','height'=>'16')); ?>
				<!-- <img src="images/point.png" width="19" height="16" /> --></div></td>
                <td width="92%" align="left" valign="top" class="txt"><div align="justify"><span class="style1">Create Customized 'Job Alert'</span><br />
                  Get Jobs regularly in your inbox by creating up to 5 personalized Job Alert</div></td>
              </tr>
              <tr>
                <td colspan="2" height="23">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top"><div>
				<?php echo $html->image('point.png',array('width'=>'19','height'=>'16')); ?>
				<!-- <img src="images/point.png" width="19" height="16" /> --></div></td>
                <td align="left" valign="top" class="txt"><div align="justify"><span class="style1">Create Multiple Profiles</span><br />
                  Create upto 5 customized profiles to apply to jobs in different categories</div></td>
              </tr>
              <tr>
                <td colspan="2" height="23">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top"><div>
				<?php echo $html->image('point.png',array('width'=>'19','height'=>'16')); ?>				
				<!-- <img src="images/point.png" width="19" height="16" /> --></div></td>
                <td align="left" valign="top" class="txt"><div align="justify"><span class="style1">Let Recruiters find you the right job</span><br />
                  Thousands of recruiters search our database daily to find candidates. Get found by them </div></td>
              </tr>
              <tr>
                <td colspan="2" height="23">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top"><div>
				<?php echo $html->image('point.png',array('width'=>'19','height'=>'16')); ?>				
				<!-- <img src="images/point.png" width="19" height="16" /> --></div></td>
                <td align="left" valign="top" class="txt"><div align="justify"><span class="style1">Confidentiality &amp; Privacy Settings</span><br />
                  Define your privacy level. Block your current employer from  accessing your profile. </div></td>
              </tr>
            </tbody>
          </table>
</div></td>
        <td width="49%" align="left" valign="top"><div class="dbgg">		
		<?php echo $form->create('Employee',array('url'=>array('controller'=>'users','action'=>'login'),'name'=>'jslogin','onSubmit'=>'return reg_vali();')); ?>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="4%" align="left" valign="middle">&nbsp;</td>
            <td colspan="2" align="left" valign="middle" class="txt"><strong>
			<?php
			if($form->isFieldError('Employee.email')) 
				e($form->error('Employee.email', null, array('class' => 'message'))); 
			else if($session->check('Message.auth') && $session->flash('auth') != '') {
						echo $session->flash('auth');
			} else { ?>			
				Already registered? Sign in now<?php } ?></strong>
			</td>
            </tr>
          <tr>
            <td align="left" valign="middle">&nbsp;</td>
            <td width="21%" align="left" valign="middle" class="txt">&nbsp;</td>
            <td width="75%" align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="middle">&nbsp;</td>
            <td align="left" valign="middle" class="txt" nowrap="nowrap">Username/Email : </td>
            <td align="left" valign="middle">
			<?php echo $form->input('email',array('label'=>false,'class'=>'inputs','id'=>'email','value'=>'','size'=>'35')); ?>
			<!-- <input type="text" name="textfield" size="35" class="inputs" /> --></td>
          </tr>
		  <tr>
			<td align='center' colspan='3' valign="middle" ><div id='usernameSpan' class='backvalid'></div></td>
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
			<?php echo $form->input('password',array('label'=>false,'class'=>'inputs','type'=>'password','id'=>'password','value'=>'','size'=>'35')); ?>
			<!-- <input type="password" name="textfield2" size="35" class="inputs" /> --></td>
          </tr>
		  <tr>
			<td align='center' colspan='3' valign="middle" ><div id='passwordSpan' class='backvalid'></div></td>
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
			<?php echo $form->submit('Login',array('div' => false,'name'=>'reg','class'=>'submit button')); ?>
			<!-- <button name="reg" onclick="return reg_vali();" type="submit" class="submit button"> Login </button> --></td>
          </tr>
          <tr>
            <td align="left" valign="middle">&nbsp;</td>
            <td align="left" valign="middle" class="txt">&nbsp;</td>
            <td align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="middle">&nbsp;</td>
            <td align="left" valign="middle" class="txt">&nbsp;</td>
            <td align="left" valign="middle" class="txt"><strong><a href="#">Forgot Password</a></strong></td>
          </tr>
          <tr>
            <td align="left" valign="middle">&nbsp;</td>
            <td align="left" valign="middle" class="txt">&nbsp;</td>
            <td align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="middle">&nbsp;</td>
            <td align="left" valign="middle" class="txt">&nbsp;</td>
            <td align="left" valign="middle">&nbsp;</td>
          </tr>
        </table>
		<?php echo $form->end(); ?>
        </div></td>
      </tr>
    </table></td>
</tr>