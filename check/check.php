<?php
$email = $_POST['emailid'];
$pass = $_POST['password'];
include "db.php";
$sql = "select count(*)from students where email = '$email' and password = '$pass';";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
if($row[0]>0)
    echo "found result";
else
    echo "no result";


?>