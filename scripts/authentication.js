function validate_signup()
{
	var uname = document.forms["signup_form"]["uname"]
    var name = document.forms["signup_form"]["name"];               
    var email = document.forms["signup_form"]["email"];    
    var dob =  document.forms["signup_form"]["dob"];  
    var password = document.forms["signup_form"]["pswd"];  
    var confirmpwd = document.forms["signup_form"]["pswd-repeat"]
	
    if(uname.value== "")
	{
		window.alert("Please enter username!")
		uname.focus(); 
        return false; 
	}
	
	if(uname.value.indexOf(" ") != -1)
	{
		window.alert("Please enter username without spaces!")
		uname.focus(); 
        return false;
	}
    if (name.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
    
       
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (dob.value == "")                           
    { 
        window.alert("Please select your date of birth!"); 
        dob.focus(); 
        return false; 
    } 
   
    if (password.value == "")                        
    { 
        window.alert("Please enter your password"); 
        password.focus(); 
        return false; 
    } 
	
	if(confirmpwd.value != password.value)
	{
		form.alert("Passwords do not match!");
		password.value = "";
		confirmpwd.vaue= "";
		password.focus();
		return false;
	}
   
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function showpassword()
{
 var x = document.getElementById("psw");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}