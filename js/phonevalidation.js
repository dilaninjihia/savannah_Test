function validateForm() {
var mail=document.forms["signinform"]["email"].value;
var password=document.forms["signinform"]["password"].value;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 

mail = mail.trim();
password = password.trim();

if (mail==null || mail=="")
  {
  alert ("Email field must be filled out");
  return false;
  }

  
else if (password==null || password=="")
{
  alert("Password field must be filled out");
  return false;
}

else if (!mailformat.test(mail)) 
    {
        alert("You have entered an invalid email address!");  
		return false;
	} 

else {
	return true;
}
}