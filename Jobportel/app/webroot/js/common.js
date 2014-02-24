function test(hello){
	alert(hello);
}
function employee_vali()
{
	var fname			=	document.frm_employee.firstname;
	var lname			=	document.frm_employee.lastname;
	var mailid			=	document.frm_employee.email;
	var pswd			=	document.frm_employee.password;
	var city			=	document.frm_employee.city;
	var tele			=	document.frm_employee.telephone;

	var fnameval		=	document.frm_employee.firstname.value;
	var lnameval		=	document.frm_employee.lastname.value;
	var mailidval		=	document.frm_employee.email.value;
	var pswdval			=	document.frm_employee.password.value;
	var cityval			=	document.frm_employee.city.value;
	var televal			=	document.frm_employee.telephone.value;
	
	if(fnameval == '') {
		//alert('First name cannot be empty');
		document.getElementById('firstnameSpan').innerHTML					=	"* Required Field";
		document.getElementById('lastnameSpan').innerHTML					=	'';
		document.getElementById('emailSpan').innerHTML						=	'';
		document.getElementById('passwordSpan').innerHTML					=	'';
		document.getElementById('citySpan').innerHTML						=	'';
		document.getElementById('phoneSpan').innerHTML						=	'';
		fname.focus();
		return false;
	}
	else if(fnameval != '') {
		var fnpattern	=	/^[A-Za-z ]+$/;
        if (fnpattern.test(fnameval)) {
            //alert(fname.value +" has alphanumeric value");
            //return true;
        } else {
            //alert(fnameval + " is not valid. Please input alphanumeric value!");
			document.getElementById('firstnameSpan').innerHTML					=	"Only Alphabets!";
			document.getElementById('lastnameSpan').innerHTML					=	'';
			document.getElementById('emailSpan').innerHTML						=	'';
			document.getElementById('passwordSpan').innerHTML					=	'';
			document.getElementById('citySpan').innerHTML						=	'';
			document.getElementById('phoneSpan').innerHTML						=	'';
			fname.focus();
            return false;
        }

		//alert(fname.length);
		if(fnameval.length < 3 || fnameval.length > 20) {
            //alert("First name should atleast have 3 characters and less than 20 characters!");
			document.getElementById('firstnameSpan').innerHTML					=	"Minimum 3 characters!";
			document.getElementById('lastnameSpan').innerHTML					=	'';
			document.getElementById('emailSpan').innerHTML						=	'';
			document.getElementById('passwordSpan').innerHTML					=	'';
			document.getElementById('citySpan').innerHTML						=	'';
			document.getElementById('phoneSpan').innerHTML						=	'';
            fname.focus();
			return false;
        } else {
            //alert(fname.value +" has alphanumeric value");
            //return true;
        }
	}
	if(lnameval == '') {
		//alert('Last name cannot be empty');
		document.getElementById('firstnameSpan').innerHTML					=	"";
		document.getElementById('lastnameSpan').innerHTML					=	'* Required Field';
		document.getElementById('emailSpan').innerHTML						=	'';
		document.getElementById('passwordSpan').innerHTML					=	'';
		document.getElementById('citySpan').innerHTML						=	'';
		document.getElementById('phoneSpan').innerHTML						=	'';
		lname.focus();
		return false;
	}
	else if(lnameval != '') {
		var lnpattern	=	/^[A-Za-z ]+$/;
        if (lnpattern.test(lnameval)) {
            //alert(fname.value +" has alphanumeric value");
            //return true;
        } else {
            //alert(lnameval + " is not valid. Please input alphanumeric value!");
			document.getElementById('firstnameSpan').innerHTML					=	"";
			document.getElementById('lastnameSpan').innerHTML					=	'Only Alphabets!';
			document.getElementById('emailSpan').innerHTML						=	'';
			document.getElementById('passwordSpan').innerHTML					=	'';
			document.getElementById('citySpan').innerHTML						=	'';
			document.getElementById('phoneSpan').innerHTML						=	'';
            lname.focus();
			return false;
        }

		if(lnameval.length < 3 || lnameval.length > 20) {
            //alert("Last name should atleast have 3 characters and less than 20 characters!");
			document.getElementById('firstnameSpan').innerHTML					=	"";
			document.getElementById('lastnameSpan').innerHTML					=	'Minimum 3 characters!';
			document.getElementById('emailSpan').innerHTML						=	'';
			document.getElementById('passwordSpan').innerHTML					=	'';
			document.getElementById('citySpan').innerHTML						=	'';
			document.getElementById('phoneSpan').innerHTML						=	'';
            lname.focus();
			return false;
        } else {
            //alert(fname.value +" has alphanumeric value");
            //return true;
        }
	}

	if(mailidval == '') {
		//alert('Email cannot be empty');
		document.getElementById('firstnameSpan').innerHTML					=	"";
		document.getElementById('lastnameSpan').innerHTML					=	'';
		document.getElementById('emailSpan').innerHTML						=	'* Required Field';
		document.getElementById('passwordSpan').innerHTML					=	'';
		document.getElementById('citySpan').innerHTML						=	'';
		document.getElementById('phoneSpan').innerHTML						=	'';
		lname.focus();
		mailid.focus();
		return false;
	}
	else if(mailidval != '') {				
		var empattern = /^[A-Za-z0-9._%+-]+@([A-Za-z0-9-]+\.)+([A-Za-z0-9]{2,4}|museum)$/;
        if (empattern.test(mailidval)) {
            //alert(fname.value +" has alphanumeric value");
            //return true;
        } else {
            //alert(mailidval + " is not valid. Please input valid email!");
			document.getElementById('firstnameSpan').innerHTML					=	"";
			document.getElementById('lastnameSpan').innerHTML					=	'';
			document.getElementById('emailSpan').innerHTML						=	'Enter valid email address';
			document.getElementById('passwordSpan').innerHTML					=	'';
			document.getElementById('citySpan').innerHTML						=	'';
			document.getElementById('phoneSpan').innerHTML						=	'';
            mailid.focus();
			return false;
        }
	}
	
	if(pswdval == '') {
		//alert('Password cannot be empty');
		document.getElementById('firstnameSpan').innerHTML					=	"";
		document.getElementById('lastnameSpan').innerHTML					=	'';
		document.getElementById('emailSpan').innerHTML						=	'';
		document.getElementById('passwordSpan').innerHTML					=	'* Required Field';
		document.getElementById('citySpan').innerHTML						=	'';
		document.getElementById('phoneSpan').innerHTML						=	'';
		pswd.focus();
		return false;
	}
	else if(pswdval != '') {
		
		//alert(fname.length);
		if(pswdval.length < 8) {
            //alert("Password should atleast have 8 characters or more!");
			document.getElementById('firstnameSpan').innerHTML					=	"";
			document.getElementById('lastnameSpan').innerHTML					=	'';
			document.getElementById('emailSpan').innerHTML						=	'';
			document.getElementById('passwordSpan').innerHTML					=	'Atleast 8 Characters';
			document.getElementById('citySpan').innerHTML						=	'';
			document.getElementById('phoneSpan').innerHTML						=	'';
            pswd.focus();
			return false;
        } else {
            //alert(fname.value +" has alphanumeric value");
            //return true;
        }
	}

	if(cityval == '') {
		//alert('City cannot be empty');
		document.getElementById('firstnameSpan').innerHTML					=	"";
		document.getElementById('lastnameSpan').innerHTML					=	'';
		document.getElementById('emailSpan').innerHTML						=	'';
		document.getElementById('passwordSpan').innerHTML					=	'';
		document.getElementById('citySpan').innerHTML						=	'* Required Field';
		document.getElementById('phoneSpan').innerHTML						=	'';
		city.focus();
		return false;
	}
	else if(cityval != '') {
		var cipattern	=	/^[A-Za-z ]+$/;
        if (cipattern.test(cityval)) {
        } else {
            //alert(cityval + " is not valid. Please input correct city!");
			document.getElementById('firstnameSpan').innerHTML					=	"";
			document.getElementById('lastnameSpan').innerHTML					=	'';
			document.getElementById('emailSpan').innerHTML						=	'';
			document.getElementById('passwordSpan').innerHTML					=	'';
			document.getElementById('citySpan').innerHTML						=	'Only Alphabets';
			document.getElementById('phoneSpan').innerHTML						=	'';
			city.focus();
            return false;
        }
	}

	if(televal == '') {
		//alert('Telephone cannot be empty');
		document.getElementById('firstnameSpan').innerHTML					=	"";
		document.getElementById('lastnameSpan').innerHTML					=	'';
		document.getElementById('emailSpan').innerHTML						=	'';
		document.getElementById('passwordSpan').innerHTML					=	'';
		document.getElementById('citySpan').innerHTML						=	'';
		document.getElementById('phoneSpan').innerHTML						=	'* Required Field';
		tele.focus();
		return false;
	}
	else if(televal != '') {
		var telpattern	=	/^[0-9]{3}-[0-9]{7,8}$/;
        if (telpattern.test(televal)) {
            //alert(fname.value +" has alphanumeric value");
            //return true;
        } else {
            //alert(televal + " is not valid. Please input correct telephone [STD CODE]-[PHONE NUMBER]");
			document.getElementById('firstnameSpan').innerHTML					=	"";
			document.getElementById('lastnameSpan').innerHTML					=	'';
			document.getElementById('emailSpan').innerHTML						=	'';
			document.getElementById('passwordSpan').innerHTML					=	'';
			document.getElementById('citySpan').innerHTML						=	'';
			document.getElementById('phoneSpan').innerHTML						=	televal + " is not valid. Please input correct telephone [STD CODE]-[PHONE NUMBER]";
			tele.focus();
            return false;
        }
	}
}

function reg_vali()
{
	//alert('34324');
	var mailid			=	document.jslogin.email;
	var pswd			=	document.jslogin.password;

	var mailidval		=	document.jslogin.email.value;
	var pswdval			=	document.jslogin.password.value;
	
	if(mailidval == '') {
		//alert('Email cannot be empty');
		document.getElementById('usernameSpan').innerHTML					=	"* Required Field";
		document.getElementById('passwordSpan').innerHTML					=	'';
		mailid.focus();
		return false;
	}
	/*else if(mailidval != '') {				
		var empattern = /^[A-Za-z0-9._%+-]+@([A-Za-z0-9-]+\.)+([A-Za-z0-9]{2,4}|museum)$/;
        if (empattern.test(mailidval)) {
            //alert(fname.value +" has alphanumeric value");
            //return true;
        } else {
            //alert(mailidval + " is not valid. Please input valid email!");
			document.getElementById('usenameSpan').innerHTML					=	"Required Field";
			document.getElementById('passwordSpan').innerHTML					=	'';
            mailid.focus();
			return false;
        }
	}*/
	
	if(pswdval == '') {
		//alert('Password cannot be empty');
		document.getElementById('usernameSpan').innerHTML					=	"";
		document.getElementById('passwordSpan').innerHTML					=	"* Required Field";
		pswd.focus();
		return false;
	}
}