<?php
include "../config/db.php";
include "./extends/header.php";
include "./extends/icons.php";

$id=$_GET['edit_id'];
$select_query = "SELECT * FROM services WHERE id='$id'";
$connet_query = mysqli_query($db_connect,$select_query);
   $services= mysqli_fetch_assoc($connet_query);

?>
<div class="row">
<div class="card col-lg-12 ">
  <div class="card-header bg-success">
    <h2>Edt Service </h2>
  </div>
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">services</li>
  </ol>
</nav>
<div class="card col-lg-10 ">
  <div class="card-header">
    <h2>Edit Services</h2>
  </div>
  <div class="card-body">
    <form action="service_post.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Service Title </label>
        <input type="text" name="title" class="form-control" value="<?= $services['title']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
   
        <input type="hidden" name="service_id" value="<?= $services['id']?>" class="form-control" value="<?= $services['title']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
      <textarea name="description"  class="form-control textarea"  id="" cols="5" rows="5"><?= $services['description']?></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">status</label>
        <select name="status"  class="form-control"  id="">
            <option <?=(isset($services['status'])=='active' ? 'selected':'')?> value="active">Active</option>
            <option <?=(isset($services['status'])=='active' ? 'selected':'')?> value="deactive">Deactive</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" id="navbar-example3">icon</label>
      <input type="text" name="icon" id="iconStore" class="form-control" value="<?= $services['icon']?>" />
      <br>
      <div class="card" style="overflow-y: scroll; width: 700px; height: 190px;">
        <div class="card-body" >
            <?php foreach($fonts as $font):?>
           <span class="fa-2x m-3"> <i onclick="myFun(event)" class="<?= $font ?>"></i></span>
            <?php endforeach ?>

            <script>
                var input =document.getElementById('iconStore');
                function myFun(){
                    input.value = event.target.getAttribute('class');
                }
            </script>
        </div>
      </div>
    </div>

   
    <button type="submit" class="btn btn-primary" name="service_edit">Update</button>
</form>
  </div>
</div>
</div>









<?php

include "./extends/footer.php";

?>