<?php   


$sname= "localhost";
$username= "root";
$password = "";
$database = "jdrm";

$conn = mysqli_connect($sname, $username, $password, $database);

if(!$conn){
    echo "Connection failed!";

}

?>