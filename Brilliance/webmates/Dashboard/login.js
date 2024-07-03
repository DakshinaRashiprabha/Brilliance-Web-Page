function validate()
{
	var username = document.getElementById("username").Value;
	var Password = document.getElementById("Password").Value;
	
	if(username === 'Admin' && Password ==="user123"){
		alert("Login Succesfully");
		
	}
	else {
		alert("Login Failed");
	}
}