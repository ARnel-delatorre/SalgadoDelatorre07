

<?php 

//create connection

$conn = mysqli_connect('fdb1033.awardspace.net','4425606_sms','LAlove100722','4425606_sms');



//check connection



if (!$conn) {

    echo "connection failed: " . mysqli_connect_error()."<br>";

    echo "connection error no: " . mysqli_connect_errno();



} else {

   // echo "connected successfuly";

}







 ?>