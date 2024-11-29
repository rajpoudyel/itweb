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
      die ("Cannot connect to $server using". $user);
     } 
     else {
     $SQLcmd = "CREATE TABLE Student(
     sid INT UNSIGNED NOT NULL,
     sname VARCHAR(50)NOT NULL, 
     major VARCHAR(30),
	 level VARCHAR(15),
	 byear CHAR(4),
	 CONSTRAINT StudentPK PRIMARY KEY (sid))";

	 mysqli_query($con, $SQLcmd);

	 echo "Table Created!";
     mysqli_close($con);
	 }
	 </body>
</html>
