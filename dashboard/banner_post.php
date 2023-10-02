<?php
session_start();
include '../config/db.php';



if(isset($_GET['change_status'])){
    $id = $_GET['change_status'];

    $select_banner = "SELECT * FROM banners WHERE id='$id'";
    $localhost = mysqli_query($db_connect,$select_banner);
    $one_query = mysqli_fetch_assoc($localhost);

    if($one_query['status'] == 'active'){
        $update_banner = "UPDATE banners SET status='deactive' WHERE id='$id'";
        mysqli_query($db_connect,$update_banner);

        $_SESSION['banner_active'] = 'deactive successfully';

        header('location: banner.php');
    }
    else{
        $update_banner = "UPDATE banners SET status='active' WHERE id='$id'";
        mysqli_query($db_connect,$update_banner);

        $_SESSION['banner_deactive'] = 'avtive successfully';

        header('location: banner.php');
    }
}



if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
     
       $delete_query = "DELETE FROM banners WHERE id='$id'";
       mysqli_query($db_connect,$delete_query);
       $_SESSION['banner_delete_massage'] = "banners deleted !";
       header('location: banner.php');
      
   }

 

//service create start
 if(isset($_POST['banner_insert'])){
    $title = $_POST['title'];
    $title_id = $_POST['id'];
    $status = $_POST['status'];

    $image = $_FILES['image']['name'];
    $exploade = explode('.',$image);
    $extension = end($exploade);
    $new_image_name = $title."-".date('s-i-h')."-".date('d-m-Y').".".$extension;
    $image_temp= $_FILES['image']['tmp_name'];

    $path = "../images/banner/".$new_image_name;
        if(move_uploaded_file($image_temp,$path)){
            if($title && $status){
                $insert_query = "INSERT INTO  banners (title,image,status) VALUES ('$title','$new_image_name','$status')";
                mysqli_query($db_connect,$insert_query);
                $_SESSION['banner_insert_massage'] = "banners created Successfully !";
                header('location: banner.php');
            
        }

    }

   

    
 }
 
//service edit start
if(isset($_POST['banner_edit'])){

    $title = $_POST['title'];
    $status = $_POST['status'];
    $id = $_POST['banner_id'];

    if($title){
       
        $update_query = "UPDATE banners SET title='$title',status='$status' WHERE id='$id' ";
        mysqli_query($db_connect,$update_query);
       $_SESSION['update_massage'] = " banner updated Successfully !";
        header('location: banner.php');
    
 }

    $image = $_FILES['image']['name'];
    $exploade = explode('.',$image);
    $extension = end($exploade);
    $new_image_name = $title."-".date('s-i-h')."-".date('d-m-Y').".".$extension;
    $image_temp= $_FILES['image']['tmp_name'];

    $path = "../images/banner/".$new_image_name;

    $select_query = "SELECT * FROM banners WHERE id='$id'";
    $connet_query=mysqli_query($db_connect,$select_query);
    $profio_image =mysqli_fetch_assoc($connet_query);
    $update_path = "../images/banners/".$profio_image['image'];
    if($image){
        if(move_uploaded_file($image_temp,$path)){
            unlink($update_path);
           
                $update_query = "UPDATE banners SET  image='$new_image_name' WHERE id='$id' ";
                 mysqli_query($db_connect,$update_query);
               $_SESSION['update_massage'] = "update banner  Successfully !";
                header('location: banner.php');
            
       

        }

    }
   

 

 
}


?>