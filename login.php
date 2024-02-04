<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>
<body>
    
    <div class="login-container">
        <img src="assets\img\logo.png" width="200" height="200">
    <form action="log-auth.php" method="post">
        <h1 class="center-text">JD</h1>
        <h1 class="align-text">RECORDS</h1>


        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

        <div class="input-box">
            <input type="text" id="username" name="ename" class="input-field" placeholder="EMPLOYEE NAME">
        </div>
        <div class="input-box">
            <input type="password" id="password" name="password" class="input-field" placeholder="PASSWORD">
        </div>
        <button class="login-button">LOGIN</button>
</form>
    
<a href="login_admin.php">
    <button text-align: center; class="admin-login-button">LOGIN AS ADMIN</button></a>
    </div>
    
</body>

</html>