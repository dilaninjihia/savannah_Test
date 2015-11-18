function validateEdits()  
{  
	var email=document.forms["editform"]["email"].value;
	var phone=document.forms["editform"]["phone"].value;
	var username=document.forms["editform"]["uname"].value;
	var regex = /^\+(?:[0-9] ?){6,14}[0-9]$/;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 

	email = email.trim();
    username = username.trim();
	phone = phone.trim();

	if (email==null || email=="" && phone==null || phone=="" && username==null || username=="")
	 {
        alert("No edits made!");
		return false;
	} 
	else if (!mailformat.test(email)) 
    {
        alert("You have entered an invalid email address!");  
		return false;
	} 
	else if (!regex.test(phone))
	{
  		alert("invalid phone number");
  		return false;
	}
	else
	{  
		return true;  
	}  
	
} 

