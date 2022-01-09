<?php require "header.php"; ?>
<?php
if(isset($_POST['username'])){
    $username = $_POST['username'];
    if(!empty($username)){
        $_SESSION['username'] = $username;
        header("Location: index.php");
    }
} 
?>

<link rel="stylesheet" href="./assets/css/loginregister.css">

<fakebody>
    <div class="container-login">
        <div class="signin-signup">
            <form action="" class="sign-in-form" method="POST">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div>
                <input type="submit" value="Login" class="btnlogin">
                <p class="social-text">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="" class="social-icon"><i class="fab fa-facebook"></i></a>
                    <a href="" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="" class="social-icon"><i class="fab fa-google"></i></a>
                    <a href="" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p class="account-text">Don't have an account? <a href="" id="sign-up-btn2">Sign up</a></p>
            </form>

            <form action="" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div>
                <input type="submit" value="Sign up" class="btnlogin">
                <p class="social-text">Or Sign up with social platform</p>
                <div class="social-media">
                    <a href="" class="social-icon"><i class="fab fa-facebook"></i></a>
                    <a href="" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="" class="social-icon"><i class="fab fa-google"></i></a>
                    <a href="" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p class="account-text">Already have an account? <a href="" id="sign-in-btn2">Sign in</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Already registered?</h3>
                    <p>Login now and find your needs!</p>
                    <button class="btnlogin" id="sign-in-btn">Sign in</button>
                </div>
                <img src="./assets/images/login/signin.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Not registered yet?</h3>
                    <p>Register now and enjoy the benefits of our store!</p>
                    <button class="btnlogin" id="sign-up-btn">Sign up</button>
                </div>
                <img src="./assets/images/login/signup.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="./assets/js/loginregister.js"></script>
</fakebody>




<?php require "footer.php"; ?>