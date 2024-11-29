<!-- Connecting php with  database and cresting table    -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "utf-8">
		<title>FinalProject2 DBMS</title>
	</head>
	<body> 
	  $db = "Student_Project";
       $con =  mysqli_connect("localhost", "root", "", $db);
      if ( !$con ) {
      die ("Cannot connect to $server using $user");
     } 
     else {
     $SQLcmd = "CREATE TABLE loginInfo(
     uname VARCHAR(20) NOT NULL,
     pward VARCHAR(15)NOT NULL, 
     email VARCHAR(50),
	 CONSTRAINT loginInfoPK PRIMARY KEY (uname))";

	 mysqli_query($con, $SQLcmd);

	 echo "Table Created!";
     mysqli_close($con);
	 </body>
</html>
