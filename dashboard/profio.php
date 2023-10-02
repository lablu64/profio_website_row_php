<?php
include "../config/db.php";
include "./extends/header.php";

$select_profio_query = "SELECT * FROM pratfios";
$profios = mysqli_query($db_connect,$select_profio_query);

?>
<div class="row">
<div class="card col-lg-12 ">
  <div class="card-header bg-success">
    <h2>Profio</h2>
  </div>
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">profio</li>
    <a class=" btn btn-success " style="margin: 8px 0px 20px 674px;" href="profio_insert.php">New profio Create</a>

</ol>
 
 </nav>

<div class="card col-lg-12 ">
  <div class="card-header">
    <h2>Profio list</h2>
  </div>
  <div class="card-body">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">image</th>
      <th scope="col">Nmae</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
       $serial=0;
      foreach($profios as $profio):
    ?>
    <tr>
      <th scope="row"><?=++$serial?></th>
      <td><img height="40px" width="30px" src="../images/profio/<?=$profio['image']?>" alt=""></td>
      <td><?=$profio['title']?></td>
      <td><?=substr($profio['description'],0,30)?></td>
      <td>
        <?php if($profio['status']== 'active'):?>
        <a href="profio_post.php?change_status=<?= $profio['id'] ?>" class="badge badge-info"><?=$profio['status']?></a>
        <?php else:?>
        <a href="profio_post.php?change_status=<?= $profio['id'] ?>" class="badge badge-danger"><?=$profio['status']?></a>
        <?php endif; ?>
      </td>
      <td>
        <a class="badge badge-success" href="profio_edit.php?edit_id=<?= $profio['id'] ?>">Edit</a>
        <a class="badge badge-danger" href="profio_post.php?delete_id=<?= $profio['id'] ?>"> Delete</a>
        
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
// profios update massage show
<?php if(isset($_SESSION['update_massage'])): ?>
Toast.fire({
  icon: 'success',
  title: '<?=$_SESSION['update_massage']?>',
})
<?php endif;unset($_SESSION['update_massage'])?>

// profios insert massage insert
<?php if(isset($_SESSION['profio_insert_massage'])): ?>
Toast.fire({
  icon: 'success',
  title: '<?=$_SESSION['profio_insert_massage']?>',
})
<?php endif;unset($_SESSION['profio_insert_massage'])?>

// profios active massage insert
<?php if(isset($_SESSION['profios_active'])): ?>
Toast.fire({
  icon: 'success',
  title: '<?=$_SESSION['profios_active']?>',
})
<?php endif;unset($_SESSION['profios_active'])?>


// profios deactive massage insert
<?php if(isset($_SESSION['profios_deactive'])): ?>
Toast.fire({
  icon: 'success',
  title: '<?=$_SESSION['profios_deactive']?>',
})
<?php endif;unset($_SESSION['profios_deactive'])?>

// profios delete massage insert
<?php if(isset($_SESSION['profio_delete_massage'])): ?>
Swal.fire({
  title: '<?=$_SESSION['profio_delete_massage']?>',
  icon: 'question',
  iconHtml: '?',
  confirmButtonText: 'OK',
  cancelButtonText: 'cancel',
  showCancelButton: true,
  showCloseButton: true
})
<?php endif;unset($_SESSION['profio_delete_massage'])?>
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