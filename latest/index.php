<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>JDRM</title>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "jdrm";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error){
    die("Connection Failed: " . $connection->connect_error);
}

$sql = "SELECT * FROM customers";
$result = $connection->query($sql);

if (!$result){
    die("Invalid query: " . $connection->error);
}
?>
<body>

    <nav class="site-nav grid">
            <a href="Orders.html">Customers</a>
            <a href="Orders.html">Orders</a>
            <div class="search-bar">
                <div class="back-type">
                    <a href="login"><img src="assets/img/Back.png" alt=""></a>
                    <img src="assets/img/Search.png" alt="Search icon">
                <form>
                    <input type="text" id="search" placeholder="Search">
                </form>
                </div>
                
                <div class="filterbox">
                    <img src="assets/img/Filter.png" alt="">
                </div>
                
            </div>
    </nav>

 <!--   <div class="card grid">
    <img src="assets/customer_img/Thumbs up.jpg" alt="">
    <div class="details">
        <div class="name">
            <p> . $row["FIRST_NAME"] </p>
        </div>
        <div class="num-busloc">
            <p> . $ro </p>
            <p> . $ro</p>
        </div>
    </div>
</div>-->

 <?php

while($row = $result->fetch_assoc()){
    echo '<div class="card grid">
    <img src="assets/customer_img/' . $row["IMG"] . '" alt="">
    <div class="details">
        <div class="name">
            <p>' . $row["FIRST_NAME"] . " " . $row["MIDDLE_NAME"][0] . "." . " " . $row["LAST_NAME"] . '</p>
        </div>
        <div class="num-busloc">
            <p>' . $row["PHONE"] . '</p>
            <p>' . $row["COMPANY_LOCATION"] . '</p>
        </div>
    </div>
</div>';
}
     ?>

<div class="create-gen grid">
    <div class="create-record">
            <a class="create-button" href="create.php">
                <img src="assets/img/Create.png" alt="">
                <p>Create <br>Record</p>
            </a>
    </div>
    <div class="generate-chart">
        <div class="generate-button">
            <img src="assets/img/generate.png" alt="">
            <p>Generate <br>Chart</p>
        </div>
    </div>
    
    
</div>


    </div>
    <section id="welcome class="grid">
        <div class="welcome-text">
            <h2>dkfjdklf</h2>
            <p class="leading">jfksdl;fja;sklfjasfkd df jskldfjsadkl slkdjfsl</p>
            <a href="Orders" class="button">Orders</a>
        </div>
        <div class="welcome-img">
            <img src="assets/" alt="pic">
        </div>
    </section>

</body>
</html>