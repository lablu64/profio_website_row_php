<?php

session_start();
include '../config/db.php';



if(isset($_GET['change_status'])){
    $id = $_GET['change_status'];

    $select_portfolio = "SELECT * FROM services WHERE id='$id'";
    $localhost = mysqli_query($db_connect,$select_portfolio);
    $one_query = mysqli_fetch_assoc($localhost);

    if($one_query['status'] == 'active'){
        $update_portfolio = "UPDATE services SET status='deactive' WHERE id='$id'";
        mysqli_query($db_connect,$update_portfolio);

        $_SESSION['service_deactive'] = 'deactive successfully';

        header('location: service.php');
    }
    else{
        $update_portfolios = "UPDATE services SET status='active' WHERE id='$id'";
        mysqli_query($db_connect,$update_portfolios);

        $_SESSION['service_active'] = ' avtive successfully';

        header('location: service.php');
    }
}


if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
     
       $delete_query = "DELETE FROM services WHERE id='$id'";
       mysqli_query($db_connect,$delete_query);
       $_SESSION['service_delete_massage'] = "service created Successfully !";
       header('location: service.php');
       header('location: service.php');
   }

 

//service create start
 if(isset($_POST['service_insert'])){

    $title = $_POST['title'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $icon = $_POST['icon'];
    if($title && $description && $status && $icon){
        $insert_query = "INSERT INTO  services (title,description,icon,status) VALUES ('$title','$description','$icon','$status')";
         mysqli_query($db_connect,$insert_query);
         $_SESSION['service_insert_massage'] = "service created Successfully !";
        header('location: service.php');
    
 }
 }
 
//service edit start
if(isset($_POST['service_edit'])){

    $title = $_POST['title'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $icon = $_POST['icon'];
    $id = $_POST['service_id'];
    if($title && $description && $status && $icon){
        $update_query = "UPDATE services SET title='$title',description='$description',status='$status',icon='$icon' WHERE id='$id' ";
         mysqli_query($db_connect,$update_query);
       $_SESSION['update_massage'] = "updated Successfully !";
        header('location: service.php');
    
 }

 

 
}


?>