<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title_for_layout; ?></title>
<?php echo $html->charset('UTF-8'); 
e($html->css('Style'));
e($html->css('cmxform'));
e($javascript->link('homemenu'));
e($html->css(array('ddsmoothmenu.css','ddsmoothmenu-v.css'))); 
//e($javascript->link('jquery.min'));
//e($javascript->link('jquery-latest'));

e($javascript->link('jqueryn'));
/*e($javascript->link('js/jquery-1.7.1'));
e($javascript->link('js/jqueryForm'));
e($javascript->link('js/ajaxfileupload'));*/

e($javascript->link(array('jquery.validate','cmxforms')));
echo $javascript->link('jquery.form');
e($javascript->link('ddsmoothmenu'));
//e($javascript->link(array('jquery','ddsmoothmenu'))); 
e($javascript->link('main'));
?>
</head>
<body onload="MM_preloadImages('<?php echo WWW_ROOT; ?>img/template_04-over.gif','<?php echo WWW_ROOT; ?>img/template_05-over.gif','<?php echo WWW_ROOT; ?>img/template_06-over.gif','<?php echo WWW_ROOT; ?>img/template_07-over.gif','<?php echo WWW_ROOT; ?>img/template_08-over.gif','<?php echo WWW_ROOT; ?>img/template_10-over.gif')">
<?php 
//echo $html->url( null, true );
//echo FULL_BASE_URL;
//echo Configure::read('FULL_PATH'); 
//echo basename(dirname(APP))
//yields: 'Pizza, Inc.' 
?>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="24%" align="left" valign="top">
		<?php e($html->image('template_01.gif',array('width'=>'236','height'=>'99'))); ?>
        <td width="76%" align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="73%" align="left" valign="top">&nbsp;</td>
            <td width="16%" align="left" valign="top">&nbsp;</td>
            <td width="11%" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="middle" class="txt">
			<?php if($loggedIn) 
						e($html->link('Logout',array('controller'=>'users','action'=>'logout'))); 
					else {
						e($html->link('Sign Up',array('controller'=>'users','action'=>'register'))); ?> | <?php
e($html->link('Sign in',array('controller'=>'users','action'=>'login'))); 
					}
					?>			
			</td>
            <td align="left" valign="top">			
			<?php
			//echo Configure::read('User');
			
			
			$usertype = $_COOKIE['user_type'];
			//$_COOKIE[User];
			if($usertype != 1) {
			//echo $usertype."werwe";
				e($html->link($html->image('post.jpg',array('width'=>'121','height'=>'27')),array('controller'=>'users','action'=>'postjobs'),null,null,false));
			}
			?>
			</td>
          </tr>
          <tr>
            <td align="left" valign="top">&nbsp;</td>
            <td align="center" valign="middle">&nbsp;</td>
            <td align="center" valign="middle">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="90%" align="left" valign="top"><div id="smoothmenu1" class="ddsmoothmenu">
<ul>
<li><?php e($html->link('Home',array('controller'=>'index','action'=>'index'))); ?>

<!-- <a href="index.php">Home</a> --></li>
<li><a href="#">Jobseekers
<?php //echo ROOT.APP.WEBROOT_DIR.IMAGES; ?></a>
  <ul>
  <li><?php echo $html->link('POST RESUMES',array('controller'=>'users','action'=>'postresume'),null,null,false); ?></li>
  </ul>
</li>

<li><a href="#">Job Search</a>
  <ul>
  <li><a href="#">Quick Search
  <?php 
	//echo Configure::read('FULL_PATH'); //yields: 'Pizza, Inc.'
	//echo FULL_BASE_URL;
	//$html->url( null, true ); ?>
  </a></li>
  <li><a href="#">Advanced Search</a></li>
  </ul>
  </li>
  <li><a href="#">Useful Tips</a>
   <ul>
  <li><?php echo $html->link('Interview Guidelines',array('controller'=>'users','action'=>'interviewguide'),null,null,false); ?></li>
  <li><?php echo $html->link('Resume Guidelines',array('controller'=>'users','action'=>'resumeguide'),null,null,false); ?></li>
  </ul>
  </li>
</ul>
<br style="clear: left" />
</div></td>
        <td width="10%" align="left" valign="top">			
		<?php 
		if($usertype != 1) {
			e($html->link($html->image('template_10.gif',array('width'=>'102','name'=>'Image9','id'=>'Image9','height'=>'36',)),'/',array('onmouseout'=>'MM_swapImgRestore()','onmouseover'=>"MM_swapImage('Image9','','img/template_10-over.gif',1)"),null,false)); 
		} ?>
		</td>
      </tr>
    </table></td>
</tr>