<?php
include "../config/db.php";
include "./extends/header.php";

$select_project_count_query = "SELECT * FROM project_counts";
$project_counts = mysqli_query($db_connect,$select_project_count_query);

?>
<div class="row">
<div class="card col-lg-12 ">
  <div class="card-header bg-success">
    <h2>project count</h2>
  </div>
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">project count</li>
    <a class=" btn btn-success " style="margin: 8px 0px 20px 674px;" href="project_count_insert.php">New project_counts Create</a>

</ol>
 
 </nav>

<div class="card col-lg-12 ">
  <div class="card-header">
    <h2>project counts list</h2>
  </div>
  <div class="card-body">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">icon</th>
      <th scope="col">Title</th>
      <th scope="col">Total Project</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $serial=0;
      foreach($project_counts as $project_count):
    ?>
    <tr>
      <th scope="row"><?=++$serial?></th>
      <td><i class="<?=$project_count['icon']?>"></i></td>
      <td><?=$project_count['title']?></td>
      <td><?=$project_count['total_count']?></td>
      <td>
        <?php if($project_count['status']== 'active'):?>
        <a href="project_count_post.php?change_status=<?= $project_count['id'] ?>" class="badge badge-info"><?=$project_count['status']?></a>
        <?php else:?>
        <a href="project_count_post.php?change_status=<?= $project_count['id'] ?>" class="badge badge-danger"><?=$project_count['status']?></a>
        <?php endif; ?>
      </td>
      <td>
        <a class="badge badge-success" href="project_count_edit.php?edit_id=<?= $project_count['id'] ?>">Edit</a>
        <a class="badge badge-danger" href="project_count_post.php?delete_id=<?= $project_count['id'] ?>"> Delete</a>
        
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

// project_count insert massage insert
<?php if(isset($_SESSION['project_count_insert_massage'])): ?>
Toast.fire({
  icon: 'success',
  title: '<?=$_SESSION['project_count_insert_massage']?>',
})
<?php endif;unset($_SESSION['project_count_insert_massage'])?>

// project_count active massage 
<?php if(isset($_SESSION['project_count_active'])): ?>
Toast.fire({
  icon: 'success',
  title: '<?=$_SESSION['project_count_active']?>',
})
<?php endif;unset($_SESSION['project_count_active'])?>

// project_count deactive massage 
<?php if(isset($_SESSION['project_count_deactive'])): ?>
Toast.fire({
  icon: 'success',
  title: '<?=$_SESSION['project_count_deactive']?>',
})
<?php endif;unset($_SESSION['project_count_deactive'])?>

// project_count delete massage 
<?php if(isset($_SESSION['project_count_delete_massage'])): ?>
Swal.fire({
  title: '<?=$_SESSION['project_count_delete_massage']?>',
  icon: 'question',
  iconHtml: '?',
  confirmButtonText: 'OK',
  cancelButtonText: 'cancel',
  showCancelButton: true,
  showCloseButton: true
})
<?php endif;unset($_SESSION['project_count_delete_massage'])?>
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