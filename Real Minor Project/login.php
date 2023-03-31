<?php

   $username=$_POST['username'];
   $password=$_POST['password'];

   $conn= new mysqli('localhost','root','','mhc_database');

   if($conn->connect_error)
   {
      echo "$conn->connect_error";
      die("connection failed : ". $conn->connect_error);
   }
   else
   {
      $query="select * from mhc_table where Email_Id='$username' and New_Password='$password'";

      $result=mysqli_query($conn,$query);

      $count=mysqli_num_rows($result);

      if($count>0)
      {
         echo "Login Successful";
      }
      else
      {
         echo "Login Unsuccessful please check username and password";
      }
   }
?>