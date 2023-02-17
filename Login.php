<?php
include_once('conn.php');
session_start();
unset($_SESSION['admin']);
unset($_SESSION['security']);
unset($_SESSION['participant']);

if (isset($_POST['email']) && isset($_POST['password'])) {
    $sql1 = " SELECT * FROM  mb_birthday.admin
            WHERE email = :email  AND password = :pw";
    $stmt1 = $userdata->prepare($sql1);
    $stmt1->execute(array(
        ':email' => $_POST['email'],
        ':pw' => $_POST['password']
    ));
    $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

    if ($row1 === FALSE) {
        header('Location: login.php');
        echo "<div id='myAlert' class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert'>&times;</a>
        <strong>Warning!</strong>&nbsp;Username or Password Incorrect!&nbsp;&nbsp;<a href='index.php'>GO TO HOME</a><br>
    </div>";
        return;
    } else {
       
            $_SESSION['admin'] = $row1;
            header('Location:Dashbboard.php');
            return;
        
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3e57cc6f1b.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="Login.css" rel="stylesheet">
    <link href="plugins/noty/noty.css" rel="stylesheet" />
    <link href="plugins/noty/animate.min.css" rel="stylesheet" />
    <link href="plugins/noty/themes/metroui.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <script type="text/javascript" src="qrcode.js"></script>
    <script type="text/javascript" src="macintosh.mjs"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>

    <title>Student Information System</title>
</head>

<body>
    <link rel="stylesheet" href="Login.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="" method="post">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="name" placeholder="Name" />
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="" method="post">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <a href="#">Forgot your password?</a>
                <button type="Submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button type="submit" class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button type="submit" class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <b> Follow me on </b>
        <div class="icons">
            <a href="https://github.com/kvaibhav01" target="_blank" class="social"><i class="fab fa-github"></i></a>
            <a href="https://www.instagram.com/vaibhavkhulbe143/" target="_blank" class="social"><i class="fab fa-instagram"></i></a>
            <a href="https://medium.com/@vaibhavkhulbe" target="_blank" class="social"><i class="fab fa-medium"></i></a>
            <a href="https://twitter.com/vaibhav_khulbe" target="_blank" class="social"><i class="fab fa-twitter-square"></i></a>
            <a href="https://linkedin.com/in/vaibhav-khulbe/" target="_blank" class="social"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
    <script src="Login.js"></script>
</body>