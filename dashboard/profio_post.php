<?php
session_start();
include '../config/db.php';

if(isset($_GET['change_status'])){
    $id=$_GET['change_status'];
    $select_profio_query = "SELECT * FROM pratfios WHERE id='$id'";
    $connet_profio_query = mysqli_query($db_connect,$select_profio_query);
       $profios= mysqli_fetch_assoc($connet_profio_query);
     
       if($profios['status'] =='active'){
        $update_status_query = "UPDATE pratfios SET status='deactive' WHERE id='$id'";
        $stataus_query = mysqli_query($db_connect,$update_status_query);
        $_SESSION['profios_deactive'] = " Deactive Successfully !";
      
        header('location: profio.php');

       }
       else{
        $update_status_query = "UPDATE pratfios SET status='active' WHERE id='$id'";
        // print_r($update_status_query);
        $stataus_query = mysqli_query($db_connect,$update_status_query);
        $_SESSION['profios_active'] = " Active Successfully !";
      
         header('location: profio.php');

       }
    }
/// profio delete start
if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
     
       $delete_query = "DELETE FROM pratfios WHERE id='$id'";
       mysqli_query($db_connect,$delete_query);
       $_SESSION['profio_delete_massage'] = "profios created Successfully !";
       header('location: profio.php');
      
   }

 

//profios create start
 if(isset($_POST['profio_insert'])){
    $title = $_POST['title'];
    $title_id = $_POST['id'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $profio_name = $_POST['profio_name'];
    $image = $_FILES['image']['name'];
    $exploade = explode('.',$image);
    $extension = end($exploade);
    $new_image_name = $title."-".date('s-i-h')."-".date('d-m-Y').".".$extension;
    $image_temp= $_FILES['image']['tmp_name'];

    $path = "../images/profio/".$new_image_name;
        if(move_uploaded_file($image_temp,$path)){
            if($title && $description && $status){
                $insert_query = "INSERT INTO  pratfios (title,description,image,profio_name,status) VALUES ('$title','$description','$new_image_name','$profio_name','$status')";
                mysqli_query($db_connect,$insert_query);
                $_SESSION['profio_insert_massage'] = "service created Successfully !";
                header('location: profio.php');
            
        }

    }

   

    
 }
 
//profios edit start
if(isset($_POST['profio_edit'])){

    $title = $_POST['title'];
    $profio_name = $_POST['profio_name'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $id = $_POST['profio_id'];

    if($title && $profio_name ){
    //    $update_query="UPDATE `pratfios` SET `profio_name`='$profio_name',`title`='$title',`description`='$description',`status`='$status' WHERE 'id'='$id'";
         $update_query = "UPDATE pratfios SET title='$title',profio_name='$profio_name',description='$description',status='$status'  WHERE id='$id'";
         //$test_update = "UPDATE pratfios SET tittle='$tittle', description='$description' WHERE id='$id'";

        mysqli_query($db_connect,$update_query);
       $_SESSION['update_massage'] = "updated Successfully !";
        header('location: profio.php');
    
 }

    $profio_name = $_POST['profio_name'];
    $image = $_FILES['image']['name'];
    $exploade = explode('.',$image);
    $extension = end($exploade);
    $new_image_name = $title."-".date('s-i-h')."-".date('d-m-Y').".".$extension;
    $image_temp= $_FILES['image']['tmp_name'];

    $path = "../images/profio/".$new_image_name;

    $select_query = "SELECT * FROM pratfios WHERE id='$id'";
    $connet_query=mysqli_query($db_connect,$select_query);
    $profio_image =mysqli_fetch_assoc($connet_query);
    $update_path = "../images/profio/".$profio_image['image'];
    if($image){
        if(move_uploaded_file($image_temp,$path)){
            unlink($update_path);
           
                $update_query = "UPDATE pratfios SET  image='$new_image_name' WHERE id='$id' ";
                 mysqli_query($db_connect,$update_query);
               $_SESSION['update_massage'] = "updated  Successfully !";
                header('location: profio.php');
            
       

        }

    }
   

 

 
}


?>