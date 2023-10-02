<?php
session_start();
include '../config/db.php';

//service edit start
if(isset($_POST['about_edit'])){

    $short_description = $_POST['short_description'];
    $google = $_POST['google'];
    $name = $_POST['name'];
    $instagram = $_POST['instagram'];
    $linkend = $_POST['linkend'];
    $faccebook = $_POST['faccebook'];
    $about_des = $_POST['about_des'];
    $email = $_POST['email'];

    $phone = $_POST['phone'];
    
    $address = $_POST['address'];
    $contact_description = $_POST['contact_description'];
    // $image = $_POST['image'];
 
    $id = $_POST['about_id'];

    if($short_description && $instagram && $address){
       
        $update_query = "UPDATE abouts SET short_description='$short_description',name='$name',google='$google',instagram='$instagram',linkend='$linkend',faccebook='$faccebook',about_des='$about_des',email='$email',phone='$phone',address='$address',contact_description='$contact_description' WHERE id=1 ";
        
        mysqli_query($db_connect,$update_query);
          $_SESSION['about_update_massage'] = "setting updated Successfully !";
         header('location: about_edit.php');
    
 }

    $image = $_FILES['image']['name'];
    $exploade = explode('.',$image);
    $extension = end($exploade);
    $new_image_name = $phone."-".date('s-i-h')."-".date('d-m-Y').".".$extension;
    $image_temp= $_FILES['image']['tmp_name'];

    $path = "../images/about/".$new_image_name;

    $select_query = "SELECT * FROM abouts WHERE id='$id'";
    $connet_query=mysqli_query($db_connect,$select_query);
    $profio_image =mysqli_fetch_assoc($connet_query);
    $update_path = "../images/about/".$profio_image['image'];
    if($image){
        if(move_uploaded_file($image_temp,$path)){
            unlink($update_path);
           
                $update_query = "UPDATE abouts SET  image='$new_image_name' WHERE id='$id' ";
                 mysqli_query($db_connect,$update_query);
               $_SESSION['about_update_massage'] = "setting updated Successfully !";
                 header('location: about_edit.php');
            
       

        }

    }
    ////
    
    $image_pro = $_FILES['image_pro']['name'];
    $exploade1 = explode('.',$image_pro);
    $extension1 = end($exploade1);
    $new_image_name1 = $name."-".date('s-i-h')."-".date('d-m-Y').".".$extension1;
   

    $select_query = "SELECT * FROM abouts WHERE id=1";
    $connet_query=mysqli_query($db_connect,$select_query);
    $profio_image1 =mysqli_fetch_assoc($connet_query);
    $update_path1 = "../images/about/".$profio_image1['image_pro'];
    $image_temp1= $_FILES['image_pro']['tmp_name'];

    $path = "../images/about/".$new_image_name1;
    if($image_pro){
        print_r($image_pro);
        if(move_uploaded_file($image_temp1,$path)){
            unlink($update_path1);
           
                $update_query = "UPDATE abouts SET image_pro='$new_image_name1' WHERE id=1 ";

                 $cat=mysqli_query($db_connect,$update_query);
                 
               $_SESSION['about_update_massage'] = "setting updated Successfully !";
                 header('location: about_edit.php');
            
       

        }

    }
   

 

 
}


?>