<?php

include "../config/db.php";
include "./extends/header.php";
include "./extends/icons.php";


// $select_query = "SELECT * FROM educations WHERE id=1";
// $connet_query = mysqli_query($db_connect,$select_query);
//    $services= mysqli_fetch_assoc($connet_query);

?>
<div class="row">
<div class="card col-lg-12 ">
  <div class="card-header bg-success">
    <h2>Eduction  Information  </h2>
  </div>
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Education information</li>
  </ol>
</nav>
<div class="card col-lg-12 ">
  <div class="card-header">
    <h2> Education information  </h2>
  </div>
  <div class="card-body">
    <form action="education_post.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="exampleInputEmail1">title  </label>
          <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    
         </div>
      </div>

      <div class="col-6 p-2">
        <div class="form-group">
          <label for="exampleInputEmail1">count  </label>
          <input type="number" name="count" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
      </div>
      <div class="col-6 p-2">
        <div class="form-group">
          <label for="exampleInputEmail1">year  </label>
          <input type="text" name="year" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
      </div>
      
   
    </div>
  

   
    <button type="submit" class="btn btn-primary" name="education_insert">Update</button>
</form>
  </div>
</div>
</div>



 <!-- setting update session massage start -->
 
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
<?php if(isset($_SESSION['uupdate_massage'])): ?>
Toast.fire({
  icon: 'success',
  title: '<?=$_SESSION['uupdate_massage']?>',
})
<?php endif;unset($_SESSION['uupdate_massage'])?>

</script>



<?php

include "./extends/footer.php";

?>