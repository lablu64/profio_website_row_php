<?php

session_start();
if(!isset( $_SESSION['admin_id'])){
    header('location:./login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="./assets/plugins/pace/pace.css" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="./assets/css/main.min.css" rel="stylesheet">
    <link href="./assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a href="login.php">Sign In</a></p>
           
           <!-- db connnet fail errror massage start -->
           <?php if(isset($_SESSION['db_error'])){?>
           <div class="alert alert-custom" role="alert">
                <div class="custom-alert-icon icon-danger"><i class="material-icons-outlined">error</i></div>
                    <div class="alert-content">
                      <span class="alert-title">sorry</span>
                        <span class="alert-text"><?=$_SESSION['db_error']?> </span>
                 </div>
            </div>
            <?php  }unset($_SESSION['db_error'])?>
             <!-- email exit  errror massage start -->
           <?php if(isset($_SESSION['email_check_error'])){?>
           <div class="alert alert-custom" role="alert">
                <div class="custom-alert-icon icon-danger"><i class="material-icons-outlined">error</i></div>
                    <div class="alert-content">
                      <span class="alert-title">sorry</span>
                        <span class="alert-text"><?=$_SESSION['email_check_error']?> </span>
                 </div>
            </div>
            <?php }unset($_SESSION['email_check_error'])?>



            <form action="register_post.php" method="POST">

            <div class="auth-credentials m-b-xxl">
                <label for="signUpUsername" class="form-label">Name</label>
                <input type="text" class="form-control m-b-md <?=(isset($_SESSION['name_error'])) ? 'is-invalid':''?>" name="name" id="signUpUsername" aria-describedby="signUpUsername" placeholder="Enter Name">
                 <!-- name error massage show start  -->
                <?php if(isset($_SESSION['name_error'])){ ?>
                 <div class=" text-danger" > <?=$_SESSION['name_error']?></div>
                <?php } unset($_SESSION['name_error']) ?>
              <!-- name error massage show end  -->
  
                <label for="signUpEmail" class="form-label">Email address</label>
                <input type="email" class="form-control m-b-md <?=(isset($_SESSION['email_error'])) ? 'is-invalid':''?>" name="email" id="signUpEmail" aria-describedby="signUpEmail" placeholder="example@neptune.com">
                   <!-- email error massage show start  -->
                <?php if(isset($_SESSION['email_error'])){ ?>
                 <div class=" text-danger" > <?=$_SESSION['email_error']?></div>
                <?php } unset($_SESSION['email_error']) ?>
              <!-- email error massage show end  -->
                <label for="signUpPassword" class="form-label">Password</label>
                <input type="password" class="form-control <?=(isset($_SESSION['password_error'])) ? 'is-invalid':''?>" name="passwod" id="signUpPassword" aria-describedby="signUpPassword">
                <!-- password error massage show start  -->
                <?php if(isset($_SESSION['password_error'])){ ?>
                 <div class=" text-danger" > <?=$_SESSION['password_error']?></div>
                <?php } unset($_SESSION['password_error']) ?>
              <!-- password error massage show end  -->
                <label for="signUpPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control <?=(isset($_SESSION['confirm_password_error'])) ? 'is-invalid':''?>" name="confirm_password" id="signUpPassword" aria-describedby="signUpPassword" >
              <!-- confirm_password error massage show start  -->
              <?php if(isset($_SESSION['confirm_password_error'])){ ?>
                 <div class=" text-danger" > <?=$_SESSION['confirm_password_error']?></div>
                <?php } unset($_SESSION['confirm_password_error']) ?>
              <!-- confirm_password error massage show end  -->
            </div>

            <div class="auth-submit">
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>
            <div class="divider"></div>  
            </form>          
        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="./assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="./assets/plugins/pace/pace.min.js"></script>
    <script src="./assets/js/main.min.js"></script>
    <script src="./assets/js/custom.js"></script>
</body>
</html>