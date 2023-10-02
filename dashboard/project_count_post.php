<?php

session_start();
include '../config/db.php';



if(isset($_GET['change_status'])){
    $id = $_GET['change_status'];

    $select_project_count = "SELECT * FROM project_counts WHERE id='$id'";
    $localhost = mysqli_query($db_connect,$select_project_count);
    $one_query = mysqli_fetch_assoc($localhost);

    if($one_query['status'] == 'active'){
        $update_project_count = "UPDATE project_counts SET status='deactive' WHERE id='$id'";
        mysqli_query($db_connect,$update_project_count);

        $_SESSION['project_count_active'] = 'deactive successfully';

        header('location: project_count.php');
    }
    else{
        $update_project_count = "UPDATE project_counts SET status='active' WHERE id='$id'";
        mysqli_query($db_connect,$update_project_count);

        $_SESSION['project_count_deactive'] = 'avtive successfully';

        header('location: project_count.php');
    }
}


//project_count delete start

if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
     
       $delete_query = "DELETE FROM project_counts WHERE id='$id'";
       mysqli_query($db_connect,$delete_query);
       $_SESSION['project_count_delete_massage'] = "total count deleted Successfully !";
       header('location: project_count.php');
       header('location: project_count.php');
   }

 

//project_count create start
 if(isset($_POST['project_count_insert'])){
 
    $title = $_POST['title'];
    $total_count = $_POST['total_count'];
    $status = $_POST['status'];
    $icon = $_POST['icon'];
    if($title && $total_count && $status && $icon){
        $insert_query = "INSERT INTO  project_counts (title,total_count,icon,status) VALUES ('$title','$total_count','$icon','$status')";
         mysqli_query($db_connect,$insert_query);
         $_SESSION['project_count_insert_massage'] = "total count created Successfully !";
        header('location: project_count.php');
    
   }
 }
 
//project_count edit start
if(isset($_POST['project_count_edit'])){

    $title = $_POST['title'];
    $total_count = $_POST['total_count'];
    $status = $_POST['status'];

    $icon = $_POST['icon'];
    $id = $_POST['project_count_id'];
    if($title && $total_count && $status && $icon){
        $update_query = "UPDATE project_counts SET title='$title',total_count='$total_count',status='$status',icon='$icon' WHERE id='$id' ";
         mysqli_query($db_connect,$update_query);
       $_SESSION['update_massage'] = "total count updated Successfully !";
        header('location: project_count.php');
    
 }

 

 
}


?>