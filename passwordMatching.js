function CheckPassword(inputtxt1,inputtxt2, inputtxt3) 
{ 
 var passw =  "/^[A-Za-z]\w{7,15}$/";
 var uname = "/^[A-Za-Z\d]{5, 20}/";
  if ((inputtxt1.value == "") ||
     (inputtxt2.value == "")  ||
	 (inputtxt3.value == ""))
  {
    alert('Please enter values for missing field or fields.');
    return false;
  }
  else 
      if(!inputtxt1.value.match(uname)) 
       { 
       alert('Username does not match the given credentials.');
       return false;
       }
      else 
	     if (!inputtxt2.value.match(passw))
        { 
        alert('Password does not match the given credentials.');
        return false;
        }
		else 
	     if (inputtxt3.value != inputtxt2.value)
        { 
        alert('Two Password fields  do not match.');
        return false;
        }
		
       else{
		  alert('Congratulation! You have successfully created username and Password.<br/>
	            Your user name is ' + inputtxt1.value'+ 
				'Your Password is ' + inputtxt2); 
		return true;
	   }
}