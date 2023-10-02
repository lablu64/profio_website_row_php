<?php
session_start();
include "./config/db.php";

 $email =$_POST['email'];
 $password = md5($_POST['password']);

 // email start
if($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $flag=true;
      } else {
        $_SESSION['email_login_error'] = "Email is not valid! ";
         header('location: login.php');
      }
}else{
    $_SESSION['email_login_error'] = "Email is not Entry! ";
    header('location: login.php');
}
// email end

// passowrd start
if(md5($_POST['password'])){
    $flag=true;
}else{
    $_SESSION['password_login_error'] = "Password is not Entry! ";
    header('location: login.php');
}
// password end

 if($email && $password){
    $select_query = "SELECT COUNT(*) AS result FROM users WHERE email='$email' AND password='$password'";
    $y=mysqli_query($db_connect,$select_query);

   if(mysqli_fetch_assoc($y)['result']==1){
    $select_user= "SELECT * FROM users WHERE email='$email'";
    $user_connect = mysqli_query($db_connect,$select_user);
    $user = mysqli_fetch_assoc($user_connect);

    $_SESSION['admin_id']=$user['id'];
    $_SESSION['admin_name']=$user['name'];
    $_SESSION['admin_email']=$user['email'];
    $_SESSION['admin_image']=$user['image'];
    header('location: ./dashboard/home.php');
   }else{
       $_SESSION['login_error'] = "user email and password not match ! ";
      header('location: login.php');
   }
 }


?>