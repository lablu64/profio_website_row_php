<?php
session_start();
include '../config/db.php';

if(isset($_GET['change_status'])){
    $id=$_GET['change_status'];
    $select_testimonial_query = "SELECT * FROM testimonials WHERE id='$id'";
    $connet_testimonial_query = mysqli_query($db_connect,$select_testimonial_query);
       $testimonial= mysqli_fetch_assoc($connet_testimonial_query);
     
       if($testimonial['status'] =='active'){
        $update_testimonial_status_query = "UPDATE testimonials SET status='deactive' WHERE id='$id'";
        $testimonials_stataus_query = mysqli_query($db_connect,$update_testimonial_status_query); 
        header('location: testimonial.php');
        $_SESSION['testimonial_active_massage'] = "testimonial deactive Successfully !";
      
       }
       else{
        $testimonial_update_status_query = "UPDATE testimonials SET status='active' WHERE id='$id'";
        $testimonial_stataus_query = mysqli_query($db_connect,$testimonial_update_status_query);
        $_SESSION['testimonial_deactive_massage'] = "testimonial active Successfully !";
       
        header('location: testimonial.php');

       }
    }

if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
     
       $testimonials_delete_query = "DELETE FROM testimonials WHERE id='$id'";
       mysqli_query($db_connect,$testimonials_delete_query);
       $_SESSION['testimonial_delete_massage'] = "testimonial deleted !";
       $_SESSION['testimonial_deleted_massage'] = "testimonial deleted Successfully !";
       
       header('location: testimonial.php');
      
   }

 

//testimonials create start
 if(isset($_POST['testimonial_insert'])){
    $title = $_POST['title'];
    $title_id = $_POST['id'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $name = $_POST['name'];
    $image = $_FILES['image']['name'];
    $exploade = explode('.',$image);
    $extension = end($exploade);
    $new_image_name = $title."-".date('s-i-h')."-".date('d-m-Y').".".$extension;
    $image_temp= $_FILES['image']['tmp_name'];

    $path = "../images/testimonial/".$new_image_name;
        if(move_uploaded_file($image_temp,$path)){
            if($title && $description && $status){
                $insert_query = "INSERT INTO  testimonials (title,description,image,name,status) VALUES ('$title','$description','$new_image_name','$name','$status')";
                mysqli_query($db_connect,$insert_query);
                $_SESSION['testimonial_insert_massage'] = "testimonial created Successfully !";
                header('location: testimonial.php');
            
        }

    }

   

    
 }
 
//testimonials edit start
if(isset($_POST['testimonial_edit'])){

    $title = $_POST['title'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $id = $_POST['testimonial_id'];

    if($title && $name && $description){
       
        $update_query = "UPDATE testimonials SET title='$title',name='$name',description='$description',status='$status' WHERE id='$id' ";
        print_r($update_query);
        mysqli_query($db_connect,$update_query);
       $_SESSION['update_massage'] = "updated Successfully !";
        header('location: testimonial.php');
    
 }

    $name = $_POST['name'];
    $image = $_FILES['image']['name'];
    $exploade = explode('.',$image);
    $extension = end($exploade);
    $new_image_name = $title."-".date('s-i-h')."-".date('d-m-Y').".".$extension;
    $image_temp= $_FILES['image']['tmp_name'];

    $path = "../images/testimonial/".$new_image_name;

    $select_query = "SELECT * FROM testimonials WHERE id='$id'";
    $connet_query=mysqli_query($db_connect,$select_query);
    $profio_image =mysqli_fetch_assoc($connet_query);
    $update_path = "../images/testimonial/".$profio_image['image'];
    if($image){
        if(move_uploaded_file($image_temp,$path)){
            unlink($update_path);
           
                $update_query = "UPDATE testimonials SET  image='$new_image_name' WHERE id='$id' ";
                 mysqli_query($db_connect,$update_query);
               $_SESSION['update_massage'] = "updated testimonials Successfully !";
                header('location: testimonial.php');
            
       

        }

    }
   

 

 
}


?>