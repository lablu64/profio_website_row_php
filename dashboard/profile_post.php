<?php

session_start();
include '../config/db.php';







if(isset($_POST['name_update'])){
  $name = $_POST['name'];

  if($name){
    $user_id = $_SESSION['admin_id'] ;
  
    $update = "UPDATE users SET name='$name' WHERE id='$user_id'";
    mysqli_query($db_connect,$update);
    $_SESSION['admin_name'] = $name;

    $_SESSION['name_update'] = 'name update succesfully';
    header("location: profile.php");
  }else{
  
    header("location: profile.php");
  }
}




if(isset($_POST['email_update'])){
  $email = $_POST['email'];
    if($email){
      $user_id = $_SESSION['admin_id'];
      $emaila_update = "UPDATE users SET email='$email' WHERE id= '$user_id'";
      mysqli_query($db_connect,$emaila_update);
      $_SESSION['admin_email'] =$email;

      $_SESSION['email_update'] = 'email update succesfully';
      header("location: profile.php");

    }else{
      $_SESSION['name_missing'] = "please enter email";
      header("location: profile.php");
    }
}


// if(isset( $_POST['password_update'])){

// $current_password =md5($_POST['current_password']);
// $new_password = $_POST['new_password'];
// $confirm_password = $_POST['confirm_password'];
// $user_id = $_SESSION['admin_id'] ;


// if($current_password){
//  // $encrypt = md5($current_password);
// $select_pass_query ="SELECT COUNT(*) AS pass_check FROM users WHERE id='$user_id' AND password='$current_password' ";
// $connect = mysqli_query($db_connect,$select_pass_query);
// if(mysqli_fetch_assoc($connect)['pass_check'] == 1){
// if($new_password){
// if($confirm_password){
//   if($new_password == $confirm_password){
//     $user_id = $_SESSION['admin_id'] ;
//     $new_encrypt = md5($new_password);
//     $update_query = "UPDATE users SET password='$new_encrypt' WHERE id='$user_id'";
    
//     $_SESSION['password_update'] = 'password update succesfully';
//     mysqli_query($db_connect,$update_query);
   
//   }else{
//     echo " valo hoye ja ashik";
//   }

// }else{
//   echo "confirm password dao nai";
// }

// }else{
//   echo "new password dao nai";
// }

// }else{
//   echo "password vule geso";
// }


// }else{

//   echo "current password dao nai";
// }

// }






// image upload



if(isset($_POST['image_update'])){

  $image = $_FILES['image']['name'];
  $temp_image = $_FILES['image']['tmp_name'];
  $explode = explode('.',$image);

  $last = end($explode);
  $user_id = $_SESSION['admin_id'] ;
  $admin_name = $_SESSION['admin_name'] ;

  $new_name = $user_id."-".$admin_name."-".date("d-m-Y").".".$last;
  $local_path = "../images/profile/".$new_name;

  if(move_uploaded_file($temp_image,$local_path)){
    $update_image_query = "UPDATE users SET image='$new_name' WHERE id='$user_id'";
    $_SESSION['admin_image'] = $new_name;
    mysqli_query($db_connect,$update_image_query);

    $_SESSION['image_update'] = 'image update succesfully';
  header("location: profile.php");

  }
}



























//image start
// if(isset($_POST['update_image'])){
    
//     $image = $_FILES['image']['name'];
    
//     $exploade = explode('.',$image);
//     $extension = end($exploade);
//     $user_id = $_SESSION['admin_id'];
//     $user_name = $_SESSION['admin_name'];
//     $new_image_name = $user_id."-".$user_name."-".date('d-m-Y').".".$extension;
//     $image_temp= $_FILES['image']['tmp_name'];
//     $path = "../images/profile/".$new_image_name;
  
//     if(move_uploaded_file($image_temp,$path)){
//         $update_image_query = "UPDATE users SET image='$new_image_name' WHERE id='$user_id'";
//         mysqli_query($db_connect,$update_image_query);
//         header('location: profile.php'); 
//         $_SESSION['admin_image']=$new_image_name;
//         $_SESSION['image_update_massage'] = "Image updated Successfully ";
        
//     }else{
//         echo "image not updated ! ";
//     }

// }



//name update start

// if(isset($_POST['update_name'])){
//     $name = $_POST['name'];

//     if($name){
//       $user_id = $_SESSION['admin_id'] ;
//       $update = "UPDATE users SET name='$name' WHERE id='$user_id'";
//       mysqli_query($db_connect,$update);
//       $_SESSION['admin_name'] = $name;
  
//       $_SESSION['name_update'] = 'name update succesfully';
//       header("location: profile.php");
//     }else{
    
//       header("location: profile.php");
//     }
// }
  
// if(isset( $_POST['update_name'])){
//     $name = $_POST['name'];
//     if($name){
//         $user_id = $_SESSION['admin_id'];
//         $update_query = "UPDATE users SET name='$name' WHERE id='$user_id'";
//         mysqli_query($db_connect,$update_query);
//         $_SESSION['admin_name']=$name;
//         $_SESSION['name_update_massage']="Profile Name Updated Successfully";
//         header('location: profile.php');
//     }
// }
//name update end

//email update start


// if(isset($_POST['update_email'])){
//     $email = $_POST['email'];
//       if($email){
//         $user_id = $_SESSION['admin_id'];
//         $emaila_update = "UPDATE users SET email='$email' WHERE id= '$user_id'";
//         mysqli_query($db_connect,$emaila_update);
//         $_SESSION['admin_email'] =$email;
  
//         $_SESSION['email_update'] = 'email update succesfully';
//         header("location: profile.php");
  
//       }else{
//         $_SESSION['name_missing'] = "please enter email";
//         header("location: profile.php");
//       }
// }
  

// if(isset($_POST['update_email'])){
//     $email = $_POST['email'];
//     if($email){
//         $user_id = $_SESSION['admin_id'];
//         $update_email_query = "UPDATE users SET email='$email' WHERE id='user_id'";
//      mysqli_query($db_connect,$update_email_query);
//      $_SESSION['admin_email']=$email;
//      $_SESSION['email_update_massage']="Profile Email Updated Successfully";
//      header('location: profile.php');
//     }
// }
//email update end

//password update start
if(isset($_POST['update_password'])){
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $user_id = $_SESSION['admin_id'];
    if($current_password){
        
        $encryt = md5($current_password);
        $update_current_password_query = "SELECT COUNT(*) AS pass_chak FROM users WHERE id='$user_id' AND password='$encryt'";
      $connet= mysqli_query($db_connect,$update_current_password_query);

      if(mysqli_fetch_assoc($connet)['pass_chak'] == 1){
        if($new_password){
            if( $confirm_password){
                if( $confirm_password == $new_password){
                    $encrytion= md5($new_password);
                    $update_password_query = "UPDATE users SET password='$encrytion' WHERE id='$user_id'";
                    mysqli_query($db_connect,$update_password_query);
                    $_SESSION['password_update_massage']="Profile password Updated Successfully";
                    header('location: profile.php');
                }else{
                    echo "password not match";
                }

            }else{
                echo "comfirm password deo";
            }

        }else{
            echo "new password deo";
        }

      }else{
        echo "password vule geso";
      }

    //  $_SESSION['admin_email']=$email;
    //  header('location: profile.php');
    }else{
        echo 'vlo thak nai';
    }
}
//password update end



?>