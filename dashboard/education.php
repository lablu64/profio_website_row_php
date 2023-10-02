<?php
include "../config/db.php";
include "./extends/header.php";

$select_education_query = "SELECT * FROM educations";
$educations = mysqli_query($db_connect,$select_education_query);

?>
<div class="row">
<div class="card col-lg-12 ">
  <div class="card-header bg-success">
    <h2>Education</h2>
  </div>
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Education</li>
    <a class=" btn btn-success " style="margin: 8px 0px 20px 674px;" href="education_insert.php">New Education Create</a>

</ol>
 
 </nav>

<div class="card col-lg-12 ">
  <div class="card-header">
    <h2>Education information list</h2>
  </div>
  <div class="card-body">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">count</th>
      <th scope="col">year</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
       $serial=0;
      foreach($educations as $education):
    ?>
    <tr>
      <th scope="row"><?=++$serial?></th>
      
      <td><?=$education['title']?></td>
      <td><?=$education['count'] ?></td>
      <td><?=$education['year'] ?></td>
      <td>
        <a class="badge badge-success" href="education_edit.php?edit_id=<?= $education['id'] ?>">Edit</a>
        <a class="badge badge-danger" href="education_post.php?delete_id=<?= $education['id'] ?>"> Delete</a>
        
      </td>
    </tr>
    <?php endforeach ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

   <!-- service update session massage start -->
 
  <script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})
// service update massage show
<?php if(isset($_SESSION['update_massage'])): ?>
Toast.fire({
  icon: 'success',
  title: '<?=$_SESSION['update_massage']?>',
})
<?php endif;unset($_SESSION['update_massage'])?>

// service insert massage insert
<?php if(isset($_SESSION['education_insert_massage'])): ?>
Toast.fire({
  icon: 'success',
  title: '<?=$_SESSION['education_insert_massage']?>',
})
<?php endif;unset($_SESSION['education_insert_massage'])?>

//  education_active massage 
<?php if(isset($_SESSION['education_active'])): ?>
Toast.fire({
  icon: 'success',
  title: '<?=$_SESSION['education_active']?>',
})
<?php endif;unset($_SESSION['education_active'])?>

// education_deactive  massage 
<?php if(isset($_SESSION['education_deactive'])): ?>
Toast.fire({
  icon: 'success',
  title: '<?=$_SESSION['education_deactive']?>',
})
<?php endif;unset($_SESSION['education_deactive'])?>

//  education_delete_massage 
<?php if(isset($_SESSION['education_delete_massage'])): ?>
Swal.fire({
  title: '<?=$_SESSION['education_delete_massage']?>',
  icon: 'question',
  iconHtml: '?',
  confirmButtonText: 'OK',
  cancelButtonText: 'cancel',
  showCancelButton: true,
  showCloseButton: true
})
<?php endif;unset($_SESSION['education_delete_massage'])?>
  </script>


  </tbody>
</table>
  </div>
</div>
</div>









<?php
//service delete start


include "./extends/footer.php";



?>