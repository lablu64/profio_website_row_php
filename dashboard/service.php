<?php
include "../config/db.php";
include "./extends/header.php";

$select_query = "SELECT * FROM services";
$services = mysqli_query($db_connect,$select_query);

?>
<div class="row">
<div class="card col-lg-12 ">
  <div class="card-header bg-success">
    <h2>Services</h2>
  </div>
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">services</li>
    <a class=" btn btn-success " style="margin: 8px 0px 20px 674px;" href="service_insert.php">New Service Create</a>

</ol>
 
 </nav>

<div class="card col-lg-12 ">
  <div class="card-header">
    <h2>Services list</h2>
  </div>
  <div class="card-body">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">icon</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $serial=0;
      foreach($services as $service):
    ?>
    <tr>
      <th scope="row"><?=++$serial?></th>
      <td><i class="<?=$service['icon']?>"></i></td>
      <td><?=$service['title']?></td>
      <td><?= html_entity_decode(substr($service['description'],0,60))?></td>
      <td>
        <?php if($service['status']== 'active'):?>
        <a href="service_post.php?change_status=<?= $service['id'] ?>" class="badge badge-info"><?=$service['status']?></a>
        <?php else :?>
        <a href="service_post.php?change_status=<?= $service['id'] ?>" class="badge badge-danger"><?=$service['status']?></a>
        <?php endif; ?>
      </td>
      <td>
        <a class="badge badge-success" href="service_edit.php?edit_id=<?= $service['id'] ?>">Edit</a>
        <a class="badge badge-danger" href="service_post.php?delete_id=<?= $service['id'] ?>"> Delete</a>
        
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
<?php if(isset($_SESSION['service_insert_massage'])): ?>
Toast.fire({
  icon: 'success',
  title: '<?=$_SESSION['service_insert_massage']?>',
})
<?php endif;unset($_SESSION['service_insert_massage'])?>

// service service_active massage 
<?php if(isset($_SESSION['service_active'])): ?>
Toast.fire({
  icon: 'success',
  title: '<?=$_SESSION['service_active']?>',
})
<?php endif;unset($_SESSION['service_active'])?>


// service service_deactive massage 
<?php if(isset($_SESSION['service_deactive'])): ?>
Toast.fire({
  icon: 'success',
  title: '<?=$_SESSION['service_deactive']?>',
})
<?php endif;unset($_SESSION['service_deactive'])?>

// service deleted massage 
<?php if(isset($_SESSION['service_delete_massage'])): ?>
Swal.fire({
  title: '<?=$_SESSION['service_delete_massage']?>',
  icon: 'question',
  iconHtml: '?',
  confirmButtonText: 'OK',
  cancelButtonText: 'cancel',
  showCancelButton: true,
  showCloseButton: true
})
<?php endif;unset($_SESSION['service_delete_massage'])?>
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