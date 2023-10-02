<?php
include "../config/db.php";
include "./extends/header.php";
include "./extends/icons.php";

$id=$_GET['edit_id'];
$select_profios_query = "SELECT * FROM pratfios WHERE id='$id'";
$connet_profios_query = mysqli_query($db_connect,$select_profios_query);
   $profio= mysqli_fetch_assoc($connet_profios_query);

?>
<div class="row">
<div class="card col-lg-12 ">
  <div class="card-header bg-success">
    <h2>Edit Profios </h2>
  </div>
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">edit profios</li>
  </ol>
</nav>
<div class="card col-lg-10 ">
  <div class="card-header">
    <h2>Edit profios</h2>
  </div>
  <div class="card-body">
    <form action="profio_post.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Profio Name </label>
        <input type="text" name="profio_name" class="form-control" value="<?= $profio['profio_name']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
   
        <input type="hidden" name="profio_id" value="<?= $profio['id']?>" class="form-control" value="<?= $profio['title']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Profio title </label>
        <input type="text" name="title" class="form-control" value="<?= $profio['title']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
      <textarea name="description"  class="form-control "  id="" cols="10" rows="10"><?= $profio['description']?></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">status</label>
        <select name="status"  class="form-control"  id="">
            <option <?=(isset($profio['active'])) ? 'selected':''?> value="active">Active</option>
            <option <?=(isset($profio['active'])) ? 'selected':''?> value="deactive">Deactive</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">image</label><br>
        <img height="200px" width="300px" src="../images/profio/<?= $profio['image']?>" alt="">
     <br> <input type="file" name="image" id="iconStore"  class="form-control dropify"  />
      <br>
     
    </div>

   
    <button type="submit" class="btn btn-primary" name="profio_edit">Update</button>
</form>
  </div>
</div>
</div>









<?php

include "./extends/footer.php";

?>