<?php
$email_id=$_POST['email_id'];
$new_pass=$_POST['new_pass'];
$con_pass=$_POST['con_pass'];

$conn=new mysqli('localhost','root','','mhc_database');

if($conn->connect_error)
{
   echo "$conn->connect_error";
   die("connection failed : ". $conn->connect_error);
}
else
{
   $stmt=$conn->prepare("insert into mhc_table(Email_Id,New_Password,Confirm_Password)values(?,?,?)");

   $stmt->bind_param("sss",$email_id,$new_pass,$con_pass);

   $stmt->execute();

   echo "registration Successful";

   $stmt->close();
   $conn->close();
}
?>