<?php
include "db-conn-login.php";

if (isset($_POST['aname']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $aname = validate($_POST['aname']);
    $pass = validate($_POST['password']);

    if(empty($aname)){
        header("Location:login_admin.php?error=Username is required");
        exit();

    }elseif (empty($pass)) {
        header("Location:login_admin.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM admins WHERE ADMIN_ID='$aname' AND PASSWORD='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['ADMIN_ID'] === $aname && $row['PASSWORD'] === $pass) {
                header("Location:index.php");
        exit();
            }else{
                header("Location:login_admin.php?error=Incorrect Username or Password");
                exit();
            }
            
        }else{
            header("Location:login_admin.php?error=Incorrect Username or Password");
            exit();
        }
    }

}else{
    header("Location:login.php?error");
    exit();
}

?>