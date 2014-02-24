<?php
//echo "werwer";
?>
  <tr>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1%" align="left" valign="top">&nbsp;</td>
        <td width="98%" align="left" valign="top"><div class="dbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="16%" align="left" valign="middle" class="txt"><strong>Profile</strong></td>
    <td width="57%" align="left" valign="middle">&nbsp;</td>
    <td width="27%" align="left" valign="middle">&nbsp;</td>
  </tr>
 
  <?php if(empty($viewdata)) { // if starts ?>
	<tr>
    <td align="left" valign="middle">&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
    <td align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="48%" align="left" valign="top">&nbsp;</td>
        <td width="52%" align="left" valign="top">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="40" align="left" valign="middle" class="txt">&nbsp;</td>
    <td align="left" valign="middle"><span class="nor">
      &nbsp;
    </span></td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="40" align="left" valign="middle" class="txt">&nbsp;</td>
    <td align="left" valign="middle"><span class="nor">&nbsp;
    </span></td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="40" align="left" valign="middle" class="txt">&nbsp;</td>
    <td align="left" valign="middle"><span class="nor">&nbsp;
    </span></td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
	<?php } // if end
	else { 
		foreach($viewdata as $viewkey=>$viewvalue) {	
	?>
  <tr>
    <td align="left" valign="middle">&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
    <td align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="48%" align="left" valign="top"><?php echo $html->image('default.jpg',array('width'=>'75','height'=>'25','border'=>'0')); 
		?>
		<!-- <img src="images/default.jpg" width="75" height="25" /> --></td>
        <td width="52%" align="left" valign="top"><?php echo $html->link($html->image('editn.jpg',array('width'=>'75','height'=>'25','border'=>'0')),array('controller'=>'users','action'=>'editresume',$viewvalue[Hrpostresume][id]),array('href'=>'javascript:void(0);','onclick'=>'editresumepost();'),null,false); 
		?>
		</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="40" align="left" valign="middle" class="txt">Name : </td>
    <td align="left" valign="middle"><span class="nor">
      <?php echo ucfirst($viewvalue[Hrpostresume][myname]); ?>
    </span></td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="40" align="left" valign="middle" class="txt">Desgination : </td>
    <td align="left" valign="middle"><span class="nor">
      <?php echo ucfirst($viewvalue[Hrpostresume][companyname]); ?>
    </span></td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="40" align="left" valign="middle" class="txt">Year of Expertence : </td>
    <td align="left" valign="middle"><span class="nor">
      <?php echo $viewvalue[Hrpostresume][exp_year] . " years " . $viewvalue[Hrpostresume][exp_month]. " months" ; ?>
    </span></td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
 <?php } // foreach
		} // else
	?>
  <tr>
    <td height="30" align="left" valign="middle" class="txt">&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
</table>
</div></td>
        <td width="1%" align="left" valign="top">&nbsp;</td>
      </tr>
    </table></td>
  </tr>