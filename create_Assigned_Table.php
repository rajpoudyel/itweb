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
     $SQLcmd = "CREATE TABLE Assigned(
     sid INT UNSIGNED NOT NULL,
     pid INT  UNSIGNED NOT NULL,
	 sdate DATE,
	 edate DATE
	 CONSTRAINT AssignedPK PRIMARY KEY(sid, pid),
	 CONSTRAINT StudentFK FOREIGN KEY (sid) REFERENCES Student(sid),
	 CONSTRAINT ProjectFK FOREIGN KEY(pid) REFERENCES Project(pid)");

	 mysqli_query($con, $SQLcmd);

	 echo "Table Created!";
     mysqli_close($con);
	 </body>
</html>
