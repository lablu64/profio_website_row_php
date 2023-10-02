<?php
include "../config/db.php";
include "./extends/header.php";

$select_testimonial_query = "SELECT * FROM testimonials";
$testimonials = mysqli_query($db_connect,$select_testimonial_query);

?>
<div class="row">
<div class="card col-lg-12 ">
  <div class="card-header bg-success">
    <h2>testimonial</h2>
  </div>
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">testimonial</li>
    <a class=" btn btn-success " style="margin: 8px 0px 20px 674px;" href="testimonial_insert.php">New testimonial Create</a>

</ol>
 
 </nav>

<div class="card col-lg-12 ">
  <div class="card-header">
    <h2>testimonial list</h2>
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
      foreach($testimonials as $row):
    ?>
    <tr>
      <th scope="row"><?=++$serial?></th>
      <td><img height="40px" width="30px" src="../images/testimonial/<?=$row['image']?>" alt=""></td>
      <td><?=$row['title']?></td>
      <td><?= substr($row['description'],0,30) ?></td>
      <td>
        <?php if($row['status']== 'active'):?>
        <a href="testimonial_post.php?change_status=<?= $row['id'] ?>" class="badge badge-info"><?=$row['status']?></a>
        <?php else:?>
        <a href="testimonial_post.php?change_status=<?= $row['id'] ?>" class="badge badge-danger"><?=$row['status']?></a>
        <?php endif; ?>
      </td>
      <td>
        <a class="badge badge-success" href="testimonial_edit.php?edit_id=<?= $row['id'] ?>">Edit</a>
        <a class="badge badge-danger" href="testimonial_post.php?delete_id=<?= $row['id'] ?>"> Delete</a>
        
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
      // testimonials update massage show
      <?php if(isset($_SESSION['update_massage'])): ?>
      Toast.fire({
        icon: 'success',
        title: '<?=$_SESSION['update_massage']?>',
      })
      <?php endif;unset($_SESSION['update_massage'])?>

      // testimonials insert massage insert
      <?php if(isset($_SESSION['testimonial_insert_massage'])): ?>
      Toast.fire({
        icon: 'success',
        title: '<?=$_SESSION['testimonial_insert_massage']?>',
      })
      <?php endif;unset($_SESSION['testimonial_insert_massage'])?>

      // testimonials status deactive massage insert
      <?php if(isset($_SESSION['testimonial_deactive_massage'])): ?>
      Toast.fire({
        icon: 'success',
        title: '<?=$_SESSION['testimonial_deactive_massage']?>',
      })
      <?php endif;unset($_SESSION['testimonial_deactive_massage'])?>


      // testimonials active massage insert
      <?php if(isset($_SESSION['testimonial_active_massage'])): ?>
      Toast.fire({
        icon: 'success',
        title: '<?=$_SESSION['testimonial_active_massage']?>',
      })
      <?php endif;unset($_SESSION['testimonial_active_massage'])?>


      // testimonials insert massage insert
      <?php if(isset($_SESSION['testimonial_deleted_massage'])): ?>
      Toast.fire({
        icon: 'success',
        title: '<?=$_SESSION['testimonial_deleted_massage']?>',
      })
      <?php endif;unset($_SESSION['testimonial_deleted_massage'])?>


      // testimonials delete massage 
      <?php if(isset($_SESSION['testimonial_delete_massage'])): ?>
      Swal.fire({
        title: '<?=$_SESSION['testimonial_delete_massage']?>',
        icon: 'question',
        iconHtml: '?',
        confirmButtonText: 'OK',
        cancelButtonText: 'cancel',
        showCancelButton: true,
        showCloseButton: true
      })
      <?php endif;unset($_SESSION['testimonial_delete_massage'])?>
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