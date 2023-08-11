
function validat()
	{
		var fname = document.getElementById("fname").value;
		var filter = /^[A-Za-z]+$/;
		alert("fuction called...");
		if (!filter.(fname)) 
		{
			alert("if condition runs...");
			document.getElementById("fnm").innerHTML="Please enter only characters";
			document.getElementById("fname").focus();
			return false;
		}
		else
		{
			return true;
		}
		
		
		if(name=="")
		{
			document.getElementById("fnm").innerHTML="This field is required...";
			document.getElementById("fname").focus();
			return false;

		}
		else
		{
			document.getElementById("fnm").innerHTML="";
			return true;
		}
	}
	
	function validate(){
		
	alert('function called....');
		
    let result = true;

    let fname = document.getElementById('fname').value;
    let errusername = document.getElementById('errusername');
    let email = document.getElementById('email').value;
    let erremail = document.getElementById('erremail');
    let password = document.getElementById('password').value;
    let errpass = document.getElementById('errpass');
    let repassword = document.getElementById('re-password').value;
    let errrepass = document.getElementById('errrepass');

    const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    const usernameRegex = /^[a-zA-Z0-9_]*$/;

    //Email
    if(email == ""){
        erremail.innerHTML  = "Email can't be empty";
        result = false;
    else if(!emailRegex.test(email)) {
        erremail.innerHTML = "Invalid e-mail format";
        result = false;
    }else{
        erremail.innerHTML = "";
    }

    // Username
    if(fname == ""){
        script("fname can't be empty");
        result = false;
    }else if(!usernameRegex.test(username)) {
        errusername.innerHTML = "Username must only contain alphanumeric characters";
        result = false;
    }else if(username.length < 6 || username.length > 20) {
        errusername.innerHTML = "Username must be between 6 and 20 characters long";
        result = false;
    }else{
        return true;
    }

    //Password
    if(password==""){
        errpass.innerHTML = "Password can't be empty";
        result = false;
    }else if (password.length < 8){
        errpass.innerHTML = "Password must be at least 8 characters long";
        result = false;
    }else if (password != repassword){
        errrepass.innerHTML = "Please correctly confirm the password";
        result = false;
    }else{
        errpass.innerHTML = "";
        errrepass.innerHTML = "";
    }

    return result;
}
