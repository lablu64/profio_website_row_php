<?php
include "../config/db.php";
include "./extends/header.php";
include "./extends/icons.php";

$id=$_GET['edit_id'];
$select_testimonial_query = "SELECT * FROM testimonials WHERE id='$id'";
$connet_testimonial_query = mysqli_query($db_connect,$select_testimonial_query);
   $testimonial= mysqli_fetch_assoc($connet_testimonial_query);

?>
<div class="row">
<div class="card col-lg-12 ">
  <div class="card-header bg-success">
    <h2>Edit testimonial </h2>
  </div>
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">edit testimonial</li>
  </ol>
</nav>
<div class="card col-lg-10 ">
  <div class="card-header">
    <h2>Edit testimonial</h2>
  </div>
  <div class="card-body">
    <form action="testimonial_post.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">testimonial Name </label>
        <input type="text" name="name" class="form-control" value="<?= $testimonial['name']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
   
        <input type="hidden" name="testimonial_id" value="<?= $testimonial['id']?>" class="form-control" value="<?= $testimonial['title']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">testimonial title </label>
        <input type="text" name="title" class="form-control" value="<?= $testimonial['title']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
      <textarea name="description"  class="form-control textarea"  id="" cols="5" rows="5"><?= $testimonial['description']?></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">status</label>
        <select name="status"  class="form-control"  id="">
            <option  <?=(isset($testimonial['status'])=='active') ? 'selected':' '?> value="active">Active</option>
            <option  <?=(isset($testimonial['status'])=='deactive') ? 'selected':' '?> value="deactive">Deactive</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">image</label><br>
        <img height="200px" width="300px" src="../images/testimonial/<?= $testimonial['image']?>" alt="">
       <br>
        <input type="file" name="image" id="iconStore" class="form-control dropify"  />
      <br>
     
    </div>

   
    <button type="submit" class="btn btn-primary" name="testimonial_edit">Update</button>
</form>
  </div>
</div>
</div>

<?php

include "./extends/footer.php";

?>