function validate()  
{  
	var email=document.forms["signupform"]["email"].value;
	var phone=document.forms["signupform"]["phone"].value;
	var username=document.forms["signupform"]["uname"].value;
	var pass1=document.forms["signupform"]["pass1"].value;
	var pass2=document.forms["signupform"]["pass2"].value;
	var regex = /^\+(?:[0-9] ?){6,14}[0-9]$/;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 

	email = email.trim();
    pass1 = pass1.trim();
    username = username.trim();
    pass2 = pass2.trim();
	phone = phone.trim();

	if (!regex.test(phone))
	 {
        alert("invalid phone number");
		return false;
	} 
	else if (!mailformat.test(email)) 
    {
        alert("You have entered an invalid email address!");  
		return false;
	} 
	else if (!pass1.match(pass2))
	{
		alert("Passwords do not match!");
		return false;
	}
	else if (pass1==null || pass1=="" || pass2==null || pass2=="")
	{
  		alert("Password fields must be filled out!");
  		return false;
	}
	else if (email==null || email=="" )
	{
  		alert("Email field must be filled out!");
  		return false;
	}
	else if (username==null || username=="")
	{
  		alert("Username field must be filled out!");
  		return false;
	}
	else if (phone==null || phone=="")
	{
  		alert("Phone number field must be filled out!");
  		return false;
	}

	else
	{  
		return true;  
	}  
	
} 

