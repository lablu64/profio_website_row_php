<?php
include "../config/db.php";
include "./extends/header.php";
include "./extends/icons.php";

$id=$_GET['edit_id'];
$select_banner_query = "SELECT * FROM banners WHERE id='$id'";
$connet_banner_query = mysqli_query($db_connect,$select_banner_query);
   $banners= mysqli_fetch_assoc($connet_banner_query);

?>
<div class="row">
<div class="card col-lg-12 ">
  <div class="card-header bg-success">
    <h2>Edit banners </h2>
  </div>
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit banners</li>
  </ol>
</nav>
<div class="card col-lg-10 ">
  <div class="card-header">
    <h2>Edit banners</h2>
  </div>
  <div class="card-body">
    <form action="banner_post.php" method="POST" enctype="multipart/form-data">
   
    <div class="form-group">
        <label for="exampleInputEmail1">Profio title </label>
        <input type="text" name="title" class="form-control" value="<?= $banners['title']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
        <input type="hidden" name="banner_id" class="form-control" value="<?= $banners['id']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
   
      </div>
   
    <div class="form-group">
        <label for="exampleInputPassword1">image</label><br>
        <img height="200px" width="300px" src="../images/banner/<?= $banners['image']?>" alt="">
      <input type="file" name="image" id="iconStore" class="form-control dropify"  />
      <br>
     
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">status</label>
        <select name="status"  class="form-control"  id="">
            <option <?=(isset($banners['status'])=='active' ? 'selected':'')?> value="active">Active</option>
            <option <?=(isset($banners['status'])=='deactive' ? 'selected':'')?> value="deactive">Deactive</option>
        </select>
    </div>
<br>
<br>
   
    <button type="submit" class="btn btn-primary" name="banner_edit">Update</button>
</form>
  </div>
</div>
</div>









<?php

include "./extends/footer.php";

?>