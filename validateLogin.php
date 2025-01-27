<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset = "utf-8">
    <title>Validating login credentials</title> 
	<style>
	font,b{color:red;}
	.r{color:red;}
    label{width: 8em; float:left;}
	input{width:200px;}
	</style>
	<link rel='stylesheet' href='loginLink.css' type='text/css' />
  <script type="text/javascript" src = "passwordMatching.js" > </script>
  <link rel="stylesheet" href="link.css">
   </head> 
   <body>
   <div style = "height: 500px; width:800px; border:solid black 2px; background-color:lightblue;" class = "container-relative"> 
     <div class = "container-absolute top-center">
	    <h2 style = "color:blue"> Registration Form</h2>
		</div>
		 <div style = " top:10%;" class = "container-absolute center">
	 
     <?php 
	     $userName = htmlspecialchars($_POST["uname"]);
		 $password= htmlspecialchars($_POST["pword"]);
		 $password1= htmlspecialchars($_POST["pword1"]);
		 $email= htmlspecialchars($_POST["email"]);
		 $userNameHighlight = "Username";
		 $passwordHighlight = "Password";
		  $passwordnHighlight = "Re-enter Password";
		  $urex = "/[A-Za-z\d]{7,}$/";
         $prex = "/^(?=.*[a-z])(?=.*\d)(?=.*[A-Z])[0-9a-zA-Z]{7,15}$/";
		 if ($userName == null){
			 $userNameHighlight = "<font> Username</font>";
		 }
			if($password == null){
				$passwordHighlight = "<font> Password</font>";
			}
				
		  if($password1== null) {
			  $passwordnHighlight = "<font>Re-enter Password</font>";
		  }
       if (($userName == null) || ($password == null) ||($password1== null)){
	            echo "<p <b> Text fields highlighted in red font is/are empty .</b></p>";
				displayForm($userName, $password, $password1,$userNameHighlight,$passwordHighlight,$passwordnHighlight );
	   }
		else if(isset($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
				echo "<p <b> Invalid email format.</b></p>";
				displayForm($email, $userName, $password, $password1,$userNameHighlight,$passwordHighlight,$passwordnHighlight );
			 }
	   else if(!preg_match($urex, $userName, $matches)){
		   echo "<p> <b>Username field does not match the given credentials.</b></p>";
		        $userNameHighlight = "<font> Username</font>";
				displayForm($email, $userName, $password, $password1,$userNameHighlight,$passwordHighlight, $passwordnHighlight );
	   }
	   else if(!preg_match($prex, $password, $matches)){
		   echo "<p><b> Password field does not match the given credentials.</b></p>";
		        $passwordHighlight = "<font> Password</font>";
				displayForm($email, $userName, $password, $password1,$userNameHighlight,$passwordHighlight,$passwordnHighlight );
	   }
	   else if($password != $password1){
		   echo "<p><b> Two Password fields do not match.</b></p>";
		   $passwordHighlight = "<font> Password</font>";
		   $passwordnHighlight = "<font>Re-enter Password</font>";
		   displayForm($email, $userName, $password, $password1,$userNameHighlight,$passwordHighlight,$passwordnHighlight );
	   }
		   
	   else    {
	             echo "<p>Thank you for registering!<br/>";
		         echo "Your Username is " .$userName."<br/> and ";
		         echo "Your password is ". $password."<br/>";
				 echo "Your email is " .$email."</p>";
		       }  
	 ?>
	 <?php  
function displayForm($em,$un,$pd, $pd1, $unh,$ph, $p1h){
print <<<FORM
  <p>Username should be atleast 5 to 20 alphanumeric characters ,<br/> and password must 
  contain atleast one lowercase, one uppercase,<br/> 
  one number up to 7 to 15 and first character must be a letter, and email example: Eg.: example@gmail.com</p>
 <form name= "form1" action = "validateLogin.php" method = "POST"/>
 <label> Email(optional): </label><input type='text' name='email' value = "$em"/><span> <br/>
 <label> $unh: </label><input type='text' name='uname' value = "$un"/><br/>
<label>$ph: </label><input type='text' name='pword' value = "$pd" /><br/>
<label>$p1h: </label><input type='text' name='pword1' value = "$pd1" /><br/><br/>

 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 <input style = "width:100px" type="submit" name="submit" value="Submit"/>&emsp;&emsp;
 <input style = "width:100px" type="reset" value="Clear" name="reset">
</form>
FORM;
 }
 ?>
 </div>
 <div class= "container-absolute bottom-center button"> <a style = "color: white" href="myhome.html">HOME </a></div>
 <div class= "container-absolute bottom-center1 button"> <a style = "color: white" href="myhome.html">LOGIN </a></div>
 </div>
   </body> 
 </html>