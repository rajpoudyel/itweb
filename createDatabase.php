<!-- Connecting php with DBMS and  creating database    -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "utf-8">
		<title>FinalProject2 DBMS</title>
	</head>
   <body>
   <?php
/* Create connection.  */

      $link = mysqli_connect("localhost", "root", ""); 

// Check connection
            if($link === false) {    
	          die("ERROR: Could not connect. " . mysqli_connect_error());} 

// Create database query execution
            $sql = "CREATE DATABASE Student_Project";
            if(mysqli_query($link, $sql)){    
	       echo "Database created successfully";
           } 
          else{    
	     echo "ERROR: Could not execute $sql. " . mysqli_error($link);
         } 

          // Close connection
        mysqli_close($link);
    ?>
	</body>
</html>
