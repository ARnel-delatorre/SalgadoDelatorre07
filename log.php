 
<?php
if (isset($_POST['login'])) {



        $user = $_POST['user'];

        $password = $_POST['password'];

        $qry = mysqli_query($conn,"SELECT * FROM admin WHERE user='$user' AND password='$password'");

        

       if($qry->num_rows==1){
              
    
    echo'<script>alert("login successfully");window.location.href="admin/admindash.php";</script>';



           

        } else {
   echo "<center><p style='color: orange;'>Invalid credentials</p></center>";
    


   }



}

?>