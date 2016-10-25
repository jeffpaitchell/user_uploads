<?php

	ob_start();
	include_once 'dbconfig.php';

	session_start();

	include('header.html');

	if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($dbC,$_POST['admin_username']);
      $mypassword = mysqli_real_escape_string($dbC,$_POST['admin_password']); 

      echo "username= " . $myusername . "<br>";
      echo "userpassword= " . $mypassword . "<br>";

      
      $sql = "SELECT id FROM admin_users WHERE user_name = '$myusername' AND user_pass = '$mypassword'";
      $result = mysqli_query($dbC,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      // Use this line to see where your query fails
    	printf("Error: %s\n", mysqli_error($dbC));

    	echo "<br>";
    	

      $active = $row['active'];
      
      $count = mysqli_num_rows($result);

      echo "count: " . $count . "<br>"; 
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         // session_register("myusername");
         $_SESSION['admin'] = $myusername;
         
         header("location: view.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }