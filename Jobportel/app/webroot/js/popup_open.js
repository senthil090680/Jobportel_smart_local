function beforeCreateChatBox(keyword_email,chatpostid,companyname) {
				
		$(" <div />" ).attr("id","confirmPrivateMessage"+chatpostid).addClass("confirmMessage").html('<div ><p class="closepbox"> <label class="closexbox"><a class="closelink" href="javascript:void(0)" onclick="javascript:return closePrivateConfirm(this,\''+chatpostid+'\');"><b><img border="0" src="images/round_red_close_button.png" /></b></a></label></p><p style="font-size:11px;"><table width="100%" height="100%"><tr><td align="center" colspan="2" class="addcolor"><form name="sendform" id="sendform"></td></tr><tr><td align="center" colspan="2" class="addcolor">Send Enquiry by Email To '+ companyname + '</td></tr><tr><td align="center" colspan="2" class="addcolor">&nbsp;</td></tr><tr><td align="center" colspan="2" class="addcolor"></td></tr><tr><td align="center" colspan="2" class="addcolor"><span id="errormsg" class="redcolor"></span></td></tr><tr><td class="addcolor">&nbsp;&nbsp;&nbsp;&nbsp;Name&nbsp;&nbsp;*</td><td class="leftpadd"><input type="text" name="username" id="username" value="" class="inpstyle"/><input type="hidden" name="postid" id="postid" value="'+chatpostid+'" /><input type="hidden" name="keyword_email" id="keyword_email" value="'+keyword_email+'" /></td></tr><tr><td class="addcolor">&nbsp;&nbsp;&nbsp;&nbsp;Mobile&nbsp;&nbsp;*</td><td class="leftpadd"><input type="text" name="usermobile" id="usermobile" value="" maxLength="30" class="inpstyle"/><span class="addcolor"> (Only India Numbers.)</span></td></tr><td class="addcolor">&nbsp;&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;*</td><td class="leftpadd"><input type="text" name="useremail" id="useremail" value="" class="inpstyle" /></td></tr><tr><td class="addcolor">&nbsp;&nbsp;&nbsp;&nbsp;Message&nbsp;&nbsp;*</td><td class="leftpadd"><textarea name="usermsg" id="usermsg" class="inpstyle" style="height:180px;" ></textarea></td></tr><tr><td>&nbsp;</td></tr><tr><td align="center" colspan="2" class="addcolor"><a name="submitmail" id="submitmail" href="javascript:void(0);" onclick="return sendmail();" ><img src="images/send.png" /></a></td></tr><tr><td align="left" colspan="2" class="addcolor">&nbsp;</td></tr><tr><td align="center" colspan="2" class="addcolor"></form></td></tr></table></p><div style="clear:both"></div></div><div style="display:block;display:inline;padding-left:20px;padding-right:80px;" ></div>&nbsp;&nbsp;<div style="display:inline;"  ></div>').appendTo($( "body" ));
	
		$('#username').val('');
		$('#usermobile').val('');
		$('#useremail').val('');	
		$('#usermsg').val('');
		$('#errormsg').html('');	
		$("#confirmPrivateMessage"+chatpostid).css("display","block");
		$("#backgroundChatPopup").css({"opacity": "0.7"});
		//$("#backgroundChatPopup").css('display','block');

		/*if ($("#backgroundChatPopup").length > 0){
		  alert('exists');
		} else {
			alert('not exists');
		}*/
		
		$("#backgroundChatPopup").fadeIn("slow");
}
function closePrivateConfirm(abc,postid) {
	$("#backgroundChatPopup").fadeOut("slow");
	$("#confirmPrivateMessage"+postid).css('display','none');
}

function closePassword(abc,postid) {
	$("#backgroundChatPopup").fadeOut("slow");
	$("#confirmPassword"+postid).css('display','none');
}

function closeshareAd(abc,postid) {
	$("#backgroundChatPopup").fadeOut("slow");
	/*$('#yourname').val('');
	$('#youremail').val('');
	$('#yourfriend').val('');	
	$('#yourmsg').val('');
	$('#postidshare').val('');
	$('#keyword_share').val('');
	$('#errormsgshare').html('');	*/
	$("#shareAd"+postid).css('display','none');

}

function closeShareSent(abc,postid) {
	$("#backgroundChatPopup").fadeOut("slow");
	//$('#shareSentMsg').html('');
	$("#shareSentMessage"+postid).css('display','none');
}

function closeEmailEnquiry(abc,postid) {
	$("#backgroundChatPopup").fadeOut("slow");
	//$('#shareSentMsg').html('');
	$("#emailEnquiry"+postid).css('display','none');
}

function closeEditPasswordCheck(abc,postid) {
	$("#backgroundChatPopup").fadeOut("slow");
	$("#editPasswordCheck"+postid).css('display','none');
}

function closeEditAdOutput(abc,postid) {
	$("#backgroundChatPopup").fadeOut("slow");
	$("#editAdOutput"+postid).css('display','none');
}

function convert_case(str) {
  return str.toLowerCase().replace( /(^| )(\w)/g, function(x){return x.toUpperCase();} );
}

function sendmail() {
	//alert(2323);			
	var username			=	$('#username').val();
	var usermobile			=	$('#usermobile').val();
	var useremail			=	$('#useremail').val();
	var usermsg				=	$('#usermsg').val();
	var postid				=	$('#postid').val();
	var keyword_email		=	$('#keyword_email').val();
	var displayuser			=	convert_case(username);

	if(username == ''){
		$('#errormsg').html('* Required Field');
		$('#username').focus();
		return false;
	} 
	
	if (username != '') {
		var namepattern = /^[a-zA-Z ]+$/;
		if (namepattern.test(username)) {
			//alert(fname.value +" has alphanumeric value");
			//return true;
		} else {
			$('#errormsg').html('Only Alphabets');
			$('#username').focus();
			return false;
		}				
	}
	
	if(usermobile == ''){
		$('#errormsg').html('* Required Field');
		$('#usermobile').focus();
		return false;
	} 
	
	if(usermobile != '') {				
		var msgpattern = /^[0-9+ ]+$/;
        if (msgpattern.test(usermobile)) {
        } else {
			$('#errormsg').html('Allowed special characters (+) and space!');
			$('#usermobile').focus();
			return false;
        }
	}

	/*if(usermobile != '') {
		if(isNaN(usermobile)) {
			$('#errormsg').html('Mobile Phone Should be numeric');
			$('#usermobile').focus();
			return false;
		} else if(usermobile.length < 10) {
			$('#errormsg').html('Mobile Phone Should be a 10-Digit number');
			$('#usermobile').focus();
			return false;
		} 
	} */
	if(useremail == '') {
		$('#errormsg').html('* Required Field');
		$('#useremail').focus();
		return false;
	} 
	if(useremail != '') {				
		var empattern = /^[A-Za-z0-9._%+-]+@([A-Za-z0-9-]+\.)+([A-Za-z0-9]{2,4}|museum)$/;
        if (empattern.test(useremail)) {
        } else {
			$('#errormsg').html(useremail + ' is not valid. Please input valid email!');
			$('#useremail').focus();
			return false;
        }
	}
	
	if(usermsg == '') {
		$('#errormsg').html('* Required Field');
		$('#usermsg').focus();
		return false;
	} 
	if(usermsg != '') {				
		var msgpattern = /^[A-Za-z0-9._%+-, ]+$/;
        if (msgpattern.test(usermsg)) {
        } else {
			$('#errormsg').html('Allowed special characters (._%+-,) and space!');
			$('#usermsg').focus();
			return false;
        }
	}
	//alert('werwe');
	var posturl          =	'sendemail.php';
	var sendemailtouser   =       $.ajax({
		type            :       "POST",
		url             :       posturl,
		data            :       {'username' : username, 'usermobile' : usermobile, 'useremail' : useremail,'postid' : postid,'keyword_email' : keyword_email,'usermsg' : usermsg },
		cache           :       false,
		async           :       false,
		dataType        :       "text"
	}).responseText;
	
	//alert(sendemailtouser);
	if(sendemailtouser == 1) {
		var insertmsg		=	"Thanks "+ displayuser + "! A Mail has been sent to the user!";		
		$("#confirmPrivateMessage"+postid).css("display","none");
		$("#backgroundChatPopup").css("display","none");
		$(" <div />" ).attr("id","emailEnquiry"+postid).addClass("confirmShared").html('<p class="closepboxa"><label class="closexbox"><a class="closelink" href="javascript:void(0)" onclick="javascript:return closeEmailEnquiry(this,\''+postid+'\');"><b><img border="0" src="images/round_red_close_button.png" /></b></a></label></p><p style="font-size:15px;padding-left:30px;" id="emailEnquiryMsg" class="addcolor"></p>').appendTo($( "body" ));	
		$("#emailEnquiry"+postid).css("display","block");
		$('#emailEnquiryMsg').html(insertmsg);
		$("#backgroundChatPopup").css({"opacity": "0.7"});
		$("#backgroundChatPopup").fadeIn("slow");
		return false;
	} else if(sendemailtouser == 2) {
		var insertmsg		=	"Sorry "+ displayuser + "! There is some problem in sending Mail, Try Again!";		
		$("#confirmPrivateMessage"+postid).css("display","none");
		$("#backgroundChatPopup").css("display","none");
		$(" <div />" ).attr("id","emailEnquiry"+postid).addClass("confirmShared").html('<p class="closepboxa"><label class="closexbox"><a class="closelink" href="javascript:void(0)" onclick="javascript:return closeEmailEnquiry(this,\''+postid+'\');"><b><img border="0" src="images/round_red_close_button.png" /></b></a></label></p><p style="font-size:15px;padding-left:30px;" id="emailEnquiryMsg" class="addcolor"></p>').appendTo($( "body" ));	
		$("#emailEnquiry"+postid).css("display","block");
		$('#emailEnquiryMsg').html(insertmsg);
		$("#backgroundChatPopup").css({"opacity": "0.7"});
		$("#backgroundChatPopup").fadeIn("slow");
		return false;
	} else if(sendemailtouser == 3) {
		var insertmsg		=	"Sorry "+ displayuser + "! Problem in the Data you entered, Try Again!";		
		$("#confirmPrivateMessage"+postid).css("display","none");
		$("#backgroundChatPopup").css("display","none");
		$(" <div />" ).attr("id","emailEnquiry"+postid).addClass("confirmShared").html('<p class="closepboxa"><label class="closexbox"><a class="closelink" href="javascript:void(0)" onclick="javascript:return closeEmailEnquiry(this,\''+postid+'\');"><b><img border="0" src="images/round_red_close_button.png" /></b></a></label></p><p style="font-size:15px;padding-left:30px;" id="emailEnquiryMsg" class="addcolor"></p>').appendTo($( "body" ));	
		$("#emailEnquiry"+postid).css("display","block");
		$('#emailEnquiryMsg').html(insertmsg);
		$("#backgroundChatPopup").css({"opacity": "0.7"});
		$("#backgroundChatPopup").fadeIn("slow");
		return false;
	}
}
function setCookie(c_name,value,exdays)
{
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
	document.cookie=c_name + "=" + c_value;
}
function callprofile(baseurl,controlname,metname,userid) {
	//setCookie('profileid',userid,5);
	//return false;
	//window.location = '/'+baseurl+'/'+controlname+'/'+metname+'/'+userid+'/';
	window.location = '/'+baseurl+'/'+controlname+'/'+metname+'/';
}
function calledited() {
	document.forms["backtolandpage"].submit();
}