<?php
 session_start();
 include "./config/db.php";
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['passwod'];
$confirm_password = $_POST['confirm_password'];
$flag =false;
// name start
if($name){
    
    if(preg_match("/^[a-zA-Z ]*$/",$name)){
       $flag=true;
    }
    else{
        $_SESSION['name_error'] = "name is not vaild ! ";
         header('location: register.php');
    }
}else{
    $_SESSION['name_error'] = "name is missing! ";
     header('location: register.php');
}
// name end

// email start
if($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $flag=true;
      } else {
        $_SESSION['email_error'] = "email is not valid! ";
         header('location: register.php');
      }
}else{
    $_SESSION['email_error'] = "email is missing! ";
    header('location: register.php');
}
// email end

// passowrd start
if($password){
    $flag=true;
}else{
    $_SESSION['password_error'] = "password is missing! ";
    header('location: register.php');
}
// password end

// confirm_password start
if($confirm_password){
   if($password == $confirm_password){
    $flag=true;
   }else{
    $_SESSION['confirm_password_error'] = "password is not  match! ";
    header('location: register.php');
   }
}else{
    $_SESSION['confirm_password_error'] = "confirm_password is missing! ";
    header('location: register.php');
}
// confirm_password end

if($flag == true){

    if($name && $email && $password){


        $select_query = "SELECT COUNT(*) AS email_chack FROM users WHERE email='$email'";
        $x = mysqli_query($db_connect,$select_query);


        if(mysqli_fetch_assoc($x)['email_chack']==0){
            $encrypt_password = md5($password);
            $inser_query = "INSERT INTO users(name,email,password) VALUES('$name','$email','$encrypt_password')";
            mysqli_query($db_connect,$inser_query);
            $_SESSION['s_password'] =$password;
            $_SESSION['s_email']= $email;

            header('location: login.php'); 
        }else{
            $_SESSION['email_check_error'] = "  email already exit ! ";
             header('location: register.php');  
        }
       
        
    }

}else{
    $_SESSION['db_error'] = " some thing worng ! ";
    header('location: register.php'); 
}
?>