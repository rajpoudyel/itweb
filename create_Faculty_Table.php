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
     $SQLcmd = "CREATE TABLE Faculty(
     fid INT UNSIGNED NOT NULL,
     fname VARCHAR(50) NOT NULL, 
     department VARCHAR(30),
	 CONSTRAINT FacultyPK PRIMARY KEY (fid))";

	 mysqli_query($con, $SQLcmd);

	 echo "Table Created!";
     mysqli_close($con);
	 </body>
</html>
