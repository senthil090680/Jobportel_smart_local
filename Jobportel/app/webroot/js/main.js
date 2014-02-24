$(document).ready(function() {
//$.validator.addMethod("firstnamecheck", function(value,params,element) {

	 $('#role-add').click(function(){
        $('#categoryrole option:selected').each( function() {
				$("#rolesel").append("<option selected value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
		$("#rolselspan").append("</select>");
		return false;
    });
    $('#role-remove').click(function(){
        $('#rolesel option:selected').each( function() {
            $('#categoryrole').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
		return false;
    });
	 
	 $('#jobpre-add').click(function(){
        $('#joblocation_pre option:selected').each( function() {
                $('#jobpresel').append("<option selected value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
		return false;
    });
    $('#jobpre-remove').click(function(){
        $('#jobpresel option:selected').each( function() {
            $('#joblocation_pre').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
		return false;
    });


	$('#job-add').click(function(){
        $('#joblocation_pre option:selected').each( function() {
                $('#joblocation').append("<option selected value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
		return false;
    });
    $('#job-remove').click(function(){
        $('#joblocation option:selected').each( function() {
            $('#joblocation_pre').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
		return false;
    });

	$('#ug-add').click(function(){
        $('#ugdegree_pre option:selected').each( function() {
                $('#ugdegree').append("<option selected value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
		return false;
    });
    $('#ug-remove').click(function(){
        $('#ugdegree option:selected').each( function() {
            $('#ugdegree_pre').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
		return false;
    });

	$('#pg-add').click(function(){
        $('#pgdegree_pre option:selected').each( function() {
                $('#pgdegree').append("<option selected value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
		return false;
    });
    $('#pg-remove').click(function(){
        $('#pgdegree option:selected').each( function() {
            $('#pgdegree_pre').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
		return false;
    });

	$.validator.addMethod("alphacheck", function(value,element,params) {
		   var pattern = /^[A-Za-z ]+$/;
			if (!pattern.test(value)) {
				return false;
		   } else {
				return true;
		   }
		}, "<br>Only Alphabets"
	);

	$.validator.addMethod("nocommawithspace", function(value,element,params) {
		var pattern  =  value.indexOf(' ');
		//alert(pattern);
		//alert(value);
          if(pattern != '-1') {
			var patternspace  =  value.indexOf(',');
			//alert(patternspace);
				if(patternspace == '-1') {
					return false;
				 } else {
					 var lastChar = value[value.length-1];
					 if(lastChar == ',') {
						return false;
					 } else {
						return true;
					 }
				 }
		   } else {
				return true;
		   }
		}, "<br> Keywords separated with comma"
	);

	$.validator.addMethod('descripcheck', function(value,element,params) {
			var pattern		=	/^[A-Za-z0-9 ,.@#!%$&*()]+$/;
			testpattern		=	pattern.test(value);
			if(!testpattern) {
				return false;
			} else {
				return true;
			}
		}, "<br/> Allowed Special Characters (, . ! @ # % $ & * ( ) )"
	);

	$.validator.addMethod('alphanumericcheck',function(value,element,params){
		var pattern		=	/^[A-Za-z0-9 ]+$/;
		testpattern		=	pattern.test(value);
		if(!testpattern) {
			return false;
		} else {
			if(!isNaN(value)) {
				return false;
			} else {
				return true;
			}
		}
		}, "<br/> Only Alphabets or Alpha-numeric"		
	);
	
	$.validator.addMethod("websitecheck",function(value, element, params) {
			var pattern		=	/(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
			var patternres	=	pattern.test(value);
			if(!patternres) {
				return false;
			} else {
				return true;
			}
		},"<br>Invalid Website Address!."
	);

	$.validator.addMethod('phonecheckdyn',function(value,element,params) {
		var pattern = /^[0-9]{3}-[0-9]{7,8}$/;
		if(!pattern.test(value)) {
			return false;
		} else {
			return true;
		}
	}, "<br/>Invalid Phone (Format 044-40004000)"
	);

	$.validator.addMethod('usernamecheck',function(value,element,params) {
		var pattern = /^[A-Za-z0-9_]+$/;
		if(!pattern.test(value)) {
			return false;
		} else {
			var lastChar = value[value.length-1];
			 if(lastChar == '_') {
				return false;
			 } else {
				return true;
			 }
		}
	}, "<br/>No space, no special characters, only underscore allowed"
	);

	$("#addpostjobs").validate({
		onkeyup: false,
		onkeydown: false,
		rules: {
			"data[Jobpost][jobtitle]" : {
				required: true,
				alphacheck : true
			},
			"data[Jobpost][titlerole]" : { 
				required: true
			},
			"data[Jobpost][keyskills]" : { 
				required: true,
				nocommawithspace : true
			},
			"data[Jobpost][expmin]" : { 
				required: true
			},
			"data[Jobpost][expmax]" : { 
				required: true
			},
			"data[Jobpost][jobtype]" : { 
				required: true
			},
			"data[Jobpost][vacancy]" : { 
				required: true
			},
			"data[Jobpost][joblocation][]" : { 
				required: true
			},
			"data[Jobpost][ugdegree][]" : { 
				required: true
			},
			"data[Jobpost][jobdescrip]" : { 
				required: true,
				descripcheck: true
			},
			"data[Jobpost][companyname]" : { 
				required: true,
				alphanumericcheck :true					
			},
			"data[Jobpost][website]" : { 
				required: false,
				websitecheck :true					
			},
			"data[Jobpost][phonenum]" : { 
				required: false,
				phonecheckdyn :true					
			},
			"data[Jobpost][contactperson]" : { 
				required: true,
				alphacheck :true					
			},
			"data[Jobpost][mobilenum]" : { 
				required: true,
				number :true,
				minlength:10
			},
			"data[Jobpost][emailid]" : { 
				required: true,
				email :true					
			},
			"data[Jobpost][empuser]" : { 
				required: true,
				usernamecheck :true					
			},
			"data[Jobpost][emppass]" : { 
				required: true,
				minlength : 6					
			}
		},
		messages : {
			"data[Jobpost][jobtitle]" : { 
				required: "<br/>* Required Field",
			},
			"data[Jobpost][titlerole]" : { 
				required: "<br/>* Required Field"
			},
			"data[Jobpost][keyskills]" : { 
				required: "<br/>* Required Field"
			},
			"data[Jobpost][expmin]" : { 
				required: "<br/>* Required Field"
			},
			"data[Jobpost][expmax]" : { 
				required: "<br/>* Required Field"
			},
			"data[Jobpost][jobtype]" : { 
				required: "<br/>* Required Field"
			},
			"data[Jobpost][vacancy]" : { 
				required: "<br/>* Required Field"
			},
			"data[Jobpost][joblocation][]" : { 
				required: "<br/>* Required Field"
			},
			"data[Jobpost][ugdegree][]" : { 
				required: "<br/>* Required Field"
			},
			"data[Jobpost][jobdescrip]" : { 
				required: "<br/>* Required Field"
			},
			"data[Jobpost][companyname]" : { 
				required: "<br/>* Required Field"		
			},
			"data[Jobpost][contactperson]" : { 
				required: "<br/>* Required Field"	
			},
			"data[Jobpost][mobilenum]" : { 
				required: "<br/>* Required Field",
				number : "<br/>Only numeric",
				minlength: "<br/>Enter 10-Digit Number",
			},
			"data[Jobpost][emailid]" : { 
				required: "<br/>* Required Field",
				email : "<br/>Enter Valid Email"
			},
			"data[Jobpost][empuser]" : { 
				required: "<br/>* Required Field"		
			},
			"data[Jobpost][emppass]" : { 
				required: "<br/>* Required Field",
				minlength : "<br/>Minimum 6 Characters",					
			}
		}
	});


	$.validator.addMethod("firstnamecheck", function() {
		   var firstnameval = $('#firstname').val();
		   var firstpattern = /^[A-Za-z ]+$/;
			if (!firstpattern.test(firstnameval)) {
				return false;
		   } else {
				return true;
		   }
		}, "<br>Only Alphabets"
	);

	$.validator.addMethod("minlengthcheck", function() {
			var firstnameval = $('#firstname').val();
			var firstnamelen =	firstnameval.length;
			if (firstnamelen < 3) {
				return false;
			} else {
				return true;
			}
		}, "<br>Firstname should be minimum 3 characters"
	);

	$.validator.addMethod("lastnamecheck", function() {
		   var lastnameval = $('#lastname').val();
		   var lastpattern = /^[A-Za-z ]+$/;
			if (!lastpattern.test(lastnameval)) {
				return false;
		   } else {
				return true;
		   }
		}, "<br>Only Alphabets"
	);

	$.validator.addMethod("minlastcheck", function() {
			var lastnameval = $('#lastname').val();
			var lastnamelen =	lastnameval.length;
			if (lastnamelen < 3) {
				return false;
			} else {
				return true;
			}
		}, "<br>Lastname should be minimum 3 characters"
	);

	$.validator.addMethod("passcheck", function() {
			var passwordval = $('#password').val();
			var passwordlen =	passwordval.length;
			if (passwordlen < 8) {
				return false;
			} else {
				return true;
			}
		}, "<br>Password should be minimum 8 characters"
	);

	$.validator.addMethod("citycheck", function() {
		   var cityval = $('#city').val();
		   var citypattern = /^[A-Za-z ]+$/;
			if (!citypattern.test(cityval)) {
				return false;
		   } else {
				return true;
		   }
		}, "<br>Only Alphabets"
	);

	$.validator.addMethod("phonecheck", function() {
		   var telephoneval = $('#telephone').val();
		   var phonepattern = /^[0-9]{3}-[0-9]{7,8}$/;
			if (!phonepattern.test(telephoneval)) {
				return false;
		   } else {
				return true;
		   }
		}, "<br>Please input correct telephone [STD CODE]-[PHONE NUMBER]"
	);

	
	$("#frm_employee").validate({		
		onkeyup: false,
		onkeydown: false,
		rules: {
			"data[Employee][firstname]" : { 
				required: true,
				firstnamecheck : true,
				minlengthcheck: true
			},
			"data[Employee][lastname]" : { 
				required: true,
				lastnamecheck : true,
				minlastcheck: true
			},
			"data[Employee][email]" : { 
				required: true,
				email : true
			},
			"data[Employee][password]" : { 
				required: true,
				passcheck: true
			},
			"data[Employee][city]" : { 
				required: true,
				citycheck : true
			},
			"data[Employee][telephone]" : { 
				required: false,
				number: true,
				minlength:10
			}
		},
		messages : {
			"data[Employee][firstname]" : { 
				required: "<br/>* Required Field",
			},
			"data[Employee][lastname]" : { 
				required: "<br/>* Required Field"
			},
			"data[Employee][email]" : { 
				required: "<br/>* Required Field",
				email : "<br/> Enter valid email address",
			},
			"data[Employee][password]" : { 
				required: "<br/>* Required Field"
			},
			"data[Employee][city]" : { 
				required: "<br/>* Required Field"
			},
			"data[Employee][telephone]" : { 
				required: "<br/>* Required Field",
				number: "<br/>Only Numbers",
				minlength: "<br/>Mobile number should be 10 digit"
			}
		}
	});
	

	$.validator.addMethod("companycheck", function() {
		   var companynameval = $('#companyname').val();
		   var companypattern = /^[A-Za-z0-9 ]+$/;
			if (!companypattern.test(companynameval)) {
				return false;
		   } else {
				return true;
		   }
		}, "<br>Only Alphanumeric"
	);

	$.validator.addMethod("mynamecheck", function() {
		   var mynameval = $('#myname').val();
		   var mynamepattern = /^[A-Za-z0-9 ]+$/;
			if (!mynamepattern.test(mynameval)) {
				return false;
		   } else {
				return true;
		   }
		}, "<br>Only Alphanumeric"
	);

	$.validator.addMethod("resumecheck", function() {
		   var resumeval = $('#resume').val();
		   var resumepattern = /^\.doc$|\.DOC$|\.docx$|\.DOCX$|\.pdf$|\.PDF$/i;
			if (!resumepattern.test(resumeval)) {
				return false;
		   } else {
				return true;
		   }
		}, "<br>Allowed File Extensions are .doc,.docx,.pdf"
	);
	
	/*$.validator.addMethod("mainp",function(value, element, mainph) {
		   var phonenoval = $('#phoneno').val();
		   var phonepattern = /^[0-9]{3}\-?[0-9]{7,8}$/;
			if (!phonepattern.test(phonenoval)) {
				return false;
		   } else {
				return true;
		   }
		},
		"<br>Please give valid number (e.g. 044-28522484)!."
	);*/

	$.validator.addMethod("primarycheck", function() {

		   //if(!($('input[name="primaryresume"]').is(':checked'))) {
			if(!($('#primaryresume').is(':checked'))) {
				return false;
		   } else {
				return true;
		   }
		}, "<br>* Choose Primary Resume"
	);

$('form').validate({
        rules: {
			"data[Hrpostresume][exp_year]" : { 
				required: true
			},
			"data[Hrpostresume][exp_month]" : { 
				required: true
			},
			"data[Hrpostresume][myname]" : { 
				required: true,
				mynamecheck : true
			},
			"data[Hrpostresume][companyname]" : { 
				required: true,
				companycheck : true
			},
			"data[Hrpostresume][joblocation]" : { 
				required: true
			},
			"data[Hrpostresume][category]" : { 
				required: true
			},
			"data[Hrpostresume][rolesel][]" : { 
				required: true
			},
			"data[Hrpostresume][keyskills]" : { 
				required: true
			},
			"data[Hrpostresume][jobpresel][]" : { 
				required: true
			},
			"data[Hrpostresume][jobtype]" : { 
				required: true
			},
			"data[Hrpostresume][ug_qualification]" : { 
				required: true
			},
			"data[Hrpostresume][resumetitle]" : { 
				required: true
			},
			/*"data[Hrpostresume][primaryresume]" : { 
				primarycheck : true
			},*/
			"data[Hrpostresume][resume]" : { 
				required: true,
				resumecheck:true
			}			
		},
		messages : {
			"data[Hrpostresume][exp_year]" : { 
				required: "<br/>* Required Field"
			},
			"data[Hrpostresume][exp_month]" : { 
				required: "<br/>* Required Field"
			},
			"data[Hrpostresume][myname]" : { 
				required: "<br/>* Required Field"
			},
			"data[Hrpostresume][companyname]" : { 
				required: "<br/>* Required Field"
			},
			"data[Hrpostresume][joblocation]" : { 
				required: "<br/>* Required Field"
			},
			"data[Hrpostresume][category]" : { 
				required: "<br/>* Required Field"
			},
			"data[Hrpostresume][rolesel][]" : { 
				required: "<br/>* Required Field"
			},
			"data[Hrpostresume][keyskills]" : { 
				required: "<br/>* Required Field"
			},
			"data[Hrpostresume][jobpresel][]" : { 
				required: "<br/>* Required Field"
			},
			"data[Hrpostresume][jobtype]" : { 
				required: "<br/>* Required Field"
			},
			"data[Hrpostresume][ug_qualification]" : { 
				required: "<br/>* Required Field"
			},
			"data[Hrpostresume][resumetitle]" : { 
				required: "<br/>* Required Field"
			},
			"data[Hrpostresume][resume]" : { 
				required: "<br/>* Required Field"
			}
		}
});

$('#postresumesub').click(function(e){

	var errcheck = 0;
	if($("form").validate().element("#exp_year")){
		errcheckyear	= 1;
	} else {
		errcheckyear	= 0;
	}
	if($("form").validate().element("#exp_month")){
		errcheckmonth	= 1;
	} else {
		errcheckmonth	= 0;
	}
	if($("form").validate().element("#myname")) {
		errcheckmyname	= 1;
	} else {
		errcheckmyname	= 0;
	}
	if($("form").validate().element("#companyname")) {
		errcheckcompany	= 1;
	} else {
		errcheckcompany	= 0;
	}
	if($("form").validate().element("#joblocation")) {
		errchecklocation	= 1;
	} else {
		errchecklocation	= 0;
	}
	if($("form").validate().element("#category")) {
		errcheckcategory	= 1;
	} else {
		errcheckcategory	= 0;
	}
	if($("form").validate().element("#rolesel")) {
		errcheckrolesel	= 1;
	} else {
		errcheckrolesel	= 0;
	}
	if($("form").validate().element("#keyskills")) {
		errcheckkey	= 1;
	} else {
		errcheckkey	= 0;
	}
	if($("form").validate().element("#jobpresel")) {
		errcheckjobsel	= 1;
	} else {
		errcheckjobsel	= 0;
	}
	if($("form").validate().element("#jobtype")) {
		errcheckjobtype	= 1;
	} else {
		errcheckjobtype	= 0;
	}
	if($("form").validate().element("#ug_qualification")) {
		errcheckug	= 1;
	} else {
		errcheckug	= 0;
	}
	if($("form").validate().element("#resumetitle")) {
		errcheckpg	= 1;
	} else {
		errcheckpg	= 0;
	}
	/*if($("form").validate().element("#primaryresume")) {
		errcheckpri	= 1;
	} else {
		errcheckpri	= 0;
	}*/
	if($("form").validate().element("#resume")) {
		errcheckres	= 1;
	} else {
		errcheckres	= 0;
	}
	
	if(errcheckyear == 1 && errcheckmonth == 1 && errcheckmyname == 1 && errcheckcompany == 1 && errchecklocation == 1 && errcheckcategory == 1 && errcheckrolesel == 1 && errcheckkey == 1 && errcheckjobsel == 1 && errcheckjobtype == 1 && errcheckug == 1 && errcheckpg == 1 && errcheckres == 1) {
		errcheck	= 1;
	} else {
		errcheck	= 0;
	}

	if(errcheck	== 1) {
		$('#posthr').ajaxSubmit({
			dataType:'text',
				async : false,
				cache : false,
				success:function(msg){
					$("#showmsg").hide(); //hide image loading
					if(msg=='failure'){
						alert(msg);	
					}
					else {
						//alert(msg);
						//return false;
						alert("Resume Uploaded Successfully");
						//window.location = '<?php echo $html->url('/users/profile/')?>';
						window.location = msg;
						//window.location = "/Jobportel/users/profile/";
						//$("#showmsg").show();
						//$("#showmsg").html(msg);	//show message instead of image loading					
					}
				},beforeSend : function(){
					 $("#showmsg").show(); //show image loading
				}
			
		});
	}
});
	//alert(validatormsg);
	//Default Action
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});

	$('#category').change(function(){
		//alert('godfds');
		// selected value
		var selected = $(this).val();
		//alert(selected);		
		// set loading image
		ajax_loading_image('.ajax_loading_image');
		// ajax
		$.ajax({
			type: "POST",
			url: '/Jobportel/ajaxcallrole/ajax_get',
			data: "ajax=true&id="+selected,
			success: function(msg){
				//console.log(msg);
				$('.ajax_role_id').html(msg);
				// remove loading image
				ajax_remove_loading_image('.ajax_loading_image');
			}
		});
	}); 
});
ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})
ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})