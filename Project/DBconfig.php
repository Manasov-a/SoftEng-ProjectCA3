
<?php
/*
    Code obtained from databaseConfig php file from BrightSpace Software Engineering & Testing Lecture 4
*/
  $servername = "localhost"; 
  $username = "root"; 
  $password = "toor";
  $dbname = "custombuilt"; 

  $conn = mysqli_connect($servername, $username, $password, $dbname);


  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }
  else
   {
     echo "Database Connection Successful<br/><br/>";
   }

?>