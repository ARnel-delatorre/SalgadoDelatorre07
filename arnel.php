<?php

   if (isset($_POST['login'])) {

$conn = mysqli_connect('fdb1033.awardspace.net','4425606_sms','LAlove100722','4425606_sms');

        $user = $_POST['user'];

        $password = $_POST['password'];

        $qry = mysqli_query($conn,"SELECT * FROM admin WHERE user='$user' AND password='$password'");

        

     if($qry->num_rows==1){
              
    
    echo'<script>alert("login successfully");window.location.href="admin/admindash.php";</script>';



           

        } else {
   $msg="Invalid pasword or email";
             header("location: login.php?msg=$msg");
    
}}
?>
