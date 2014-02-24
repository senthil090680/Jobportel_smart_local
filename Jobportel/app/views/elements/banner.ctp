<tr>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2" align="left" valign="top">
		<?php e($html->image('wsmall.jpg',array('width'=>'5','height'=>'5'))); ?></td>
        </tr>
      <tr>
        <td width="47%" align="left" valign="top">
<?php //echo $scripts_for_layout; ?>
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="778" height="220">
		          <param name="movie" value="<?php echo Configure::read('FULL_PATH').'app/webroot/img/hedar.swf'; ; ?>" />
		          <param name="quality" value="high" />
		  <param value="transparent" name="wmode" />
		          <embed src="<?php echo Configure::read('FULL_PATH').'app/webroot/img/hedar.swf'; ; ?>" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="778" height="220" wmode="opaque"></embed>
		        </object>		
		</td>
        <td width="53%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="middle" class="txt">&nbsp;Be a performer</td>
          </tr>
          <tr>
            <td height="160" align="center" valign="middle">
			<?php e($html->image('st.jpg',array('width'=>'210','height'=>'180'))); ?></td>
          </tr>
          <tr>
            <td height="19" align="center" valign="middle" class="txt">Don't be a audience</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>