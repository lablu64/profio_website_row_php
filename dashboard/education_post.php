<?php
session_start();
include '../config/db.php';

///education status start

if(isset($_GET['change_status'])){
  $id = $_GET['change_status'];

  $select_education = "SELECT * FROM educations WHERE id='$id'";
  $localhost = mysqli_query($db_connect,$select_education);
  $one_query = mysqli_fetch_assoc($localhost);

  if($one_query['status'] == 'active'){
      $update_education = "UPDATE educations SET status='deactive' WHERE id='$id'";
      mysqli_query($db_connect,$update_education);

      $_SESSION['education_active'] = ' deactive successfully';

      header('location: service.php');
  }
  else{
      $update_portfolios = "UPDATE educations SET status='active' WHERE id='$id'";
      mysqli_query($db_connect,$update_portfolios);

      $_SESSION['education_deactive'] = ' avtive successfully';

      header('location: service.php');
  }
}


/// education delete start
if(isset($_GET['delete_id'])){
  $id=$_GET['delete_id'];
   
     $delete_query = "DELETE FROM educations WHERE id='$id'";
     mysqli_query($db_connect,$delete_query);
     $_SESSION['education_delete_massage'] = "education Deleted!";
     header('location: education.php');
    
 }

//education insert start
if(isset($_POST['education_insert'])){

    $title = $_POST['title'];
    $count = $_POST['count'];
    $year = $_POST['year'];
   

    if($title && $count && $year){
       
        $update_query = " INSERT INTO  educations (title,count,year) VALUES ('$title','$count','$year')";
        
        mysqli_query($db_connect,$update_query);
       $_SESSION['education_insert_massage'] = "education insert Successfully !";
         header('location: education.php');
    
 }


   
}

//education edit start
if(isset($_POST['education_edit'])){

    $title = $_POST['title'];
    $count = $_POST['count'];
    $year = $_POST['year'];
    $id = $_POST['education_id'];

    if($title && $count && $year){
       
        $update_query = "UPDATE educations SET title='$title',count='$count',year='$year' WHERE id='$id' ";
        
        mysqli_query($db_connect,$update_query);
       $_SESSION['update_massage'] = "education updated Successfully !";
         header('location: education.php');
    
 }


   
}


?>