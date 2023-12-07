<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>

    <link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <script type="text/javascript" 
    src="https://www.gstatic.com/charts/loader.js"
    ></script>
</head>
<body>
    <div class="sideber">
        <div class="logo"></div>
        <ul class="menu">
            <li class="activer">
                <a href="#">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Deshboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-user"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-chart-bar"></i>
                    <span>Statistics</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-star"></i>
                    <span>Testimonials</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li class="logout">
                <a href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="herader--title">
               <img src="มพ.png" alt=""/>
               <div class="das">
                <h2>University of Phayao Hospital</h2>
               </div>
            </div>
                <div class="user--info">
                <div class="searh--box">
                <i class="fa-solid
                fa-search"></i>
                <input type="text"
                placeholder="Search"/>
                </div>
                <img src="user-286.png" alt=""/>
            </div>
         </div>

          
         <div class="card-container">
            <h3 class="main--title">Today's
            data</h3>
            <div class="card--wrapper">

                <div class="payment--card
                light-blue">
                   <div class="card--header">
                    <div class="amount">
                       <span class="title">
                        Phayao Population </span> 
                        <span class="amount-value1">461,431 people</span>
                    </div>
                    <i class="fas fa-users icon dark-blue"></i>
                   </div> 
                </div>
                
                <div class="payment--card
                light-green">
                   <div class="card--header">
                    <div class="amount">
                       <span class="title">
                        Average income per person per year</span> 
                        <span class="amount-value">84,427.72 ฿</span>
                    </div>
                    <i class="fa-solid fa-money-bill icon dark-green"></i>
                   </div> 
                </div>
            <div class="list">
                <div class="card one">
                    <div class="blur">
                        <span>Service</span>
                    </div>
                </div>
            </div>

            <div class="list">
                <div class="card two">
                    <div class="blur">
                        <span>FAQ</span>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
    <div class="graphBox">
        <div id="columnchart_material" style="width: 1000px; 
        height: 350px;"></div>
    </div>


        <script src="./chatt.js"></script>
        <div class="container">
        <?php 

            if (isset($_SESSION['user_login'])) {
                $user_id = $_SESSION['user_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>
    </div>
    </div>
    
</body>
</html>