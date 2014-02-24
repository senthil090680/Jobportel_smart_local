<?php 
echo $javascript->link('popup_open');
echo $html->css('popup_open');
$baseurl		=	basename(dirname(APP));
?>
<div id='backgroundChatPopup'></div>
<script type='text/javascript'>
	var insertedid		=	"<?php echo $user_id; ?>";
	var insertmsg		=	"<?php echo $user_msg; ?>";
	var baseurl			=	"<?php echo $baseurl; ?>";
	var controlname		=	"users";
	var methodname		=	"profile";
	//setCookie('profileid',insertedid,5);
	//alert(insertedid);
	//alert(insertmsg);
	//alert(baseurl);
	$(" <div />" ).attr("id","confirmPrivateMessage"+insertedid).addClass("confirmPopup").html('<p class="closepboxa"><label class="closexbox"><a class="closelink" href="javascript:void(0)" onclick="callprofile(\''+baseurl+'\',\''+controlname+'\',\''+methodname+'\');"><b><img border="0" src="../img/round_red_close_button.png" /></b></a></label></p><p style="font-size:15px;padding-left:30px;" class="addcolor">'+insertmsg+'</p><div style="display:block;display:inline;padding-left:120px;padding-right:80px;" ><button onclick="callprofile(\''+baseurl+'\',\''+controlname+'\',\''+methodname+'\');" >Ok</button></div>').appendTo($( "body" ));	
	$("#confirmPrivateMessage"+insertedid).css("display","block");
	$("#backgroundChatPopup").css({"opacity": "0.7"});
	$("#backgroundChatPopup").fadeIn("slow");
</script>