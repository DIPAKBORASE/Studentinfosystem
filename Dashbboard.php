<?php

       include_once('conn.php');
        session_start();
        echo "hello";
        if (!isset($_SESSION['admin'])){
            header('Location:login.php');
            return;
        } 
        if(isset($_SESSION['admin']) == true)
        {   
            ?>
            <div class="alert alert-success alert-dismissible" id="login-success" role="alert">
             <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
         <strong></strong> Login Successfully
         </div>
             <?php
            $row = $_SESSION["admin"];
            $admin_name = htmlentities($row['email']);
        }  
        
?>



<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3e57cc6f1b.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="Dashboard.css" rel="stylesheet">
    <title>Student Information System <?php $admin_name ?></title>
</head>

<body>
    <header>
        <nav>
            <div>
                <h1>
                    <i class="fas fa-users"></i>
                    STUDENT INFORMATION SYSTEM
                </h1>
            </div>
            <div id="logoutbtn">
                <form method="POST">
                    <button id="logout" name="logout"><a href="logout.php">LOG-OUT</a><i class="fa fa-sign-out"></i></button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <section id="section0">
            <h2>
                WELCOME ADMIN
            </h2>
        </section>
        <section id="section1">
            <div class="section-items">
                <div id="view">
                    <a href="sisvs.php">
                        <h3><i class="fas fa-eye"><br>
                                <p class="fs">VIEW STUDENT</p>
                            </i></h3>
                    </a>
                    <p>View student will display student information and records that are stored on database.
                        Admin has full access to "view student" ,to do so one should login with correct credentials

                    </p>
                </div>
            </div>
            <div class="section-items">
                <div id="add">
                    <a href=sisas.php>
                        <h3><i class="fas fa-user-plus"><br>
                                <p class="fs">ADD STUDENT</p>
                            </i></h3>
                    </a>
                    <p>
                        Add student will pop up a form in which the details and credentials should be filled properly
                        and a student password shall be assigned which later on can be changed.
                    </p>
                </div>
            </div>
            <div class="section-items">
                <div id="delete">
                    <a href="sisDS.php">
                        <h3><i class="fas fa-user-minus"><br>
                                <p class="fs">DELETE STUDENT</p>
                            </i></h3>
                    </a>
                    <p>
                        Delete Student,requires only roll no of the student.Performing this action will completely delete the information of the student from the database
                    </p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>All Rights Reserved &#169 || 2021</p>
        <p>INDIA, MYSORE</p>
    </footer>
</body>

</html>