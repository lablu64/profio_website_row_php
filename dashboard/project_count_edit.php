<?php
include "../config/db.php";
include "./extends/header.php";
include "./extends/icons.php";

$id=$_GET['edit_id'];
$select_project_count_query = "SELECT * FROM project_counts WHERE id='$id'";
$connet_project_count_query = mysqli_query($db_connect,$select_project_count_query);
   $project_counts= mysqli_fetch_assoc($connet_project_count_query);

?>
<div class="row">
<div class="card col-lg-12 ">
  <div class="card-header bg-success">
    <h2>Edt project counts </h2>
  </div>
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">project counts</li>
  </ol>
</nav>
<div class="card col-lg-10 ">
  <div class="card-header">
    <h2>Edit project counts</h2>
  </div>
  <div class="card-body">
    <form action="project_count_post.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1"> Title </label>
        <input type="text" name="title" class="form-control" value="<?= $project_counts['title']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
   
        <input type="hidden" name="project_count_id" value="<?= $project_counts['id']?>" class="form-control" value="<?= $project_counts['title']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">total project</label>
        <input type="text" name="total_count" class="form-control" value="<?= $project_counts['total_count']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">status</label>
        <select name="status"  class="form-control"  id="">
            <option <?=(isset($project_counts['active'])) ? 'selected':''?> value="active">Active</option>
            <option <?=(isset($project_counts['deactive'])) ? 'selected':''?> value="deactive">Deactive</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">icon</label>
      <input type="text" name="icon" id="iconStore" class="form-control" value="<?= $project_counts['icon']?>" />
      <br>
      <div class="card" style="overflow-y: scroll; width: 700px; height: 190px;">
        <div class="card-body">
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

   
    <button type="submit" class="btn btn-primary" name="project_count_edit">Update</button>
</form>
  </div>
</div>
</div>









<?php

include "./extends/footer.php";

?>