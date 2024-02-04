<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "jdrm";

$connection = new mysqli($servername, $username, $password, $database);

$last_name = "";
$first_name = "";
$middle_name = "";
$birthday = "";
$email = "";
$phone = "";
$company = "";
$res_loc = "";
$bus_loc = "";
$mode_pay = "";
$add_info = "";

$errormessage = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $last_name = $_POST["last-name"];
    $first_name = $_POST["first-name"];
    $middle_name = $_POST["middle-name"];
    $birthday = $_POST["birthday"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $company = $_POST["company"];
    $res_loc = $_POST["res-loc"];
    $bus_loc = $_POST["bus-loc"];
    $mode_pay = $_POST["mode-pay"];
    $add_info = $_POST["add-info"];

    do{
        /*if ( empty($last_name) || empty($first_name) || empty($middle_name) || empty($birthday) || empty($email) || empty($phone) || empty($res_loc) || empty($bus_loc) || empty($mode_pay) ){
            $errormessage = "You have missed a field";
            break;
        }*/

        $sql = "INSERT INTO customers (LAST_NAME, FIRST_NAME, MIDDLE_NAME, BIRTHDAY, COMPANY, COMPANY_LOCATION, PHONE, EMAIL, RESIDENT_LOCATION, MODE_OF_PAY, ADD_INFO)" . "VALUES ('$last_name', '$first_name', '$middle_name', '$birthday', '$company', '$bus_loc', '$phone', '$email', '$res_loc', '$mode_pay', '$add_info')";
        $result = $connection->query($sql);

        $last_name = "";
        $first_name = "";
        $middle_name = "";
        $birthday = "";
        $email = "";
        $phone = "";
        $company = "";
        $res_loc = "";
        $bus_loc = "";
        $mode_pay = "";
        $add_info = "";

   

    }while(false);
}


$sql = "SELECT MAX(CUST_NUM) FROM customers";
$result = $connection->query($sql);
$row = $result->fetch_assoc();

$filename = $row["MAX(CUST_NUM)"];
$ext = pathinfo($_FILES["create-img"]["name"],  PATHINFO_EXTENSION);
$destination = __DIR__ . "/assets/customer_img/" . $filename . "." . $ext;

if(!move_uploaded_file($_FILES["create-img"]["tmp_name"], $destination)){
    exit("cant move file");
}

$sql = 'UPDATE customers SET IMG = "' . $filename . '.' . $ext . '" WHERE  CUST_NUM = ' . $filename;
$result = $connection->query($sql);

header("Location: index.php");

?>