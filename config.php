<?php
$SERVERNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'register1';
$con = mysqli_connect($SERVERNAME ,$USERNAME , $PASSWORD ,$DATABASE);
if(!$con){
    //  echo "success";
    die(mysqli_error($con));
}
// else{
//     die(mysqli_error($con));
// }
?>

