<?php

include "../config/db.php";
include "./extends/header.php";
include "./extends/icons.php";


$select_query = "SELECT * FROM abouts WHERE id=1";
$connet_query = mysqli_query($db_connect,$select_query);
   $services= mysqli_fetch_assoc($connet_query);

?>
<div class="row">
<div class="card col-lg-12 ">
  <div class="card-header bg-success">
    <h2>Setting  </h2>
  </div>
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Setting</li>
  </ol>
</nav>
<div class="card col-lg-12 ">
  <div class="card-header">
    <h2> Setting  </h2>
  </div>
  <div class="card-body">
    <form action="about_post.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="exampleInputEmail1">google  </label>
          <input type="text" name="google" class="form-control" value="<?= $services['google']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
    
          <input type="hidden" name="about_id" value="<?= $services['id']?>" class="form-control" value="<?= $services['id']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
      </div>

      <div class="col-6 p-2">
        <div class="form-group">
          <label for="exampleInputEmail1">Name  </label>
          <input type="text" name="name" class="form-control" value="<?= $services['name']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
      </div>
      <div class="col-6 p-2">
        <div class="form-group">
          <label for="exampleInputEmail1"> Photo  </label><br>
          <img height="200px" width="300px" src="../images/about/<?= $services['image_pro']?>" alt="">

          <input type="file" name="image_pro" class="form-control "   >
        </div>
      </div>
      <div class="col-6 p-2">
        <div class="form-group">
          <label for="exampleInputEmail1">Instagram  </label>
          <input type="text" name="instagram" class="form-control" value="<?= $services['instagram']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
      </div>
      <div class="col-6 p-2">
        <div class="form-group">
          <label for="exampleInputEmail1">linkedin  </label>
          <input type="text" name="linkend" class="form-control" value="<?= $services['linkend']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
      </div>
      <div class="col-6 p-2">
        <div class="form-group">
          <label for="exampleInputEmail1">	faccebook  </label>
          <input type="text" name="faccebook" class="form-control" value="<?= $services['faccebook']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
      </div>
      <div class="col-6 p-2">
        <div class="form-group">
          <label for="exampleInputEmail1">email  </label>
          <input type="email" name="email" class="form-control" value="<?= $services['email']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
      </div>
      <div class="col-6 p-2">
        <div class="form-group">
          <label for="exampleInputEmail1">	phone  </label>
          <input type="number" name="phone" class="form-control" value="<?= $services['phone']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
      </div>
      <div class="col-12 p-2">
        <div class="form-group">
          <label for="exampleInputEmail1">about_des  </label>
         <textarea name="about_des" id="" class="form-control " cols="30" rows="10"><?= $services['about_des']?></textarea>
        </div>
      </div>
      <div class="col-6 p-2">
        <div class="form-group">
          <label for="exampleInputEmail1">	contact description  </label>
          <textarea name="contact_description" id="" class="form-control " cols="30" rows="10"><?= $services['contact_description']?></textarea>
       </div>
      </div>
      <div class="col-6 p-2">
        <div class="form-group">
          <label for="exampleInputEmail1">	address  </label>
          <textarea name="address" id="" class="form-control " cols="30" rows="10"><?= $services['address']?></textarea>
       </div>
      </div>
   
    </div>
  
   
    <div class="form-group">
        <label for="exampleInputPassword1"> short Description</label>
      <textarea name="short_description"  class="form-control textarea"  id="" cols="10" rows="10"><?= $services['short_description']?></textarea>
    </div>
  
    <div class="form-group">
        <label for="exampleInputPassword1">image</label>
        <img height="200px" width="330px" src="../images/about/<?= $services['image']?>" alt="">
      <input type="file" name="image" id="iconStore"  class="form-control dropify"  />
      <br>
     
    </div>

   
    <button type="submit" class="btn btn-primary" name="about_edit">Update</button>
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
// about update massage show
<?php if(isset($_SESSION['about_update_massage'])): ?>
Toast.fire({
  icon: 'success',
  title: '<?=$_SESSION['about_update_massage']?>',
})
<?php endif;unset($_SESSION['about_update_massage'])?>

</script>



<?php

include "./extends/footer.php";

?>