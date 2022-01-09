<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connectstore</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<nav>
    <div class="header-2">
        <div class="header-logo">
            <a href="index.php"><img src="assets/images/logo2.png" alt="" width="200px"></a>
        </div>
        <div class="header-search-bar">
            <input type="text" name="" id="">
            <button class="search-btn btn btn-primary"> <i class="fas fa-search"></i> </button>
        </div>
        <div class="header-icon-collection">
            <i class="fas fa-user"></i>
            <i class="fas fa-shopping-cart"></i>
            <div class="login-register">
                <?php
                    if(isset($_SESSION['username'])){
                        echo "<p>Welcome </p>" . htmlspecialchars($_SESSION['username'])  . "!";
                        echo "<br>";
                        echo '<a href="logout.php">Logout </a>';
                    } else {
                        echo "<p>Welcome User!</p>";
                        echo '<a href="loginregister.php">Login | Register </a>';
                    }
                
                ?>       
            </div>
        </div>
    </div>
    <hr>
    <div class="header-nav">
            <div>
                <i class="fas fa-bars"></i>
                <a href="#">All Category</a>
            </div>
            <div><a href="#">Firewall</a></div>
            <div><a href="#">Account</a></div>
    </div>
    <hr>
</nav>

