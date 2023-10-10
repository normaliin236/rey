<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "crud";

$con = new mysqli($host,$user,$pass,$db);
if (!$con) {
    echo"yawa kaayo gyud daghan problema ";
}
$item_price1 =$_POST['Price'];
$name = $_POST['quantity'];


$qry = "INSERT INTO `rey`(`quantity`,`Price`) VALUES ('$name','$item_price1')";
$insert = mysqli_query($con,$qry);
if (!$insert) {
    echo "inserted";
}
else {
   echo "<script>
   alert('ITEM ADDED SUCCESSFULLY');
   window.location.href='store.php';
   </script>";
}



?>