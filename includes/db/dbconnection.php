<?php
$DB_server ='localhost';
$DB_username ='root';
$DB_password ='';
$DB_name= 'sms';

$conn = mysqli_connect($DB_server,$DB_username,$DB_password,$DB_name);
if(!isset($conn)){
    echo "There is a database error";

}
else{
   header("Location: ../../login.php");
}