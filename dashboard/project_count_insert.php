<?php
include "../config/db.php";
include "./extends/header.php";
include "./extends/icons.php";

?>
<div class="row">
<div class="card col-lg-12 ">
  <div class="card-header bg-success">
    <h2>New project counts Create</h2>
  </div>
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"> carate project counts</li>
  </ol>
</nav>
<div class="card col-lg-10 ">
  <div class="card-header">
    <h2>New project counts Insert</h2>
  </div>
  <div class="card-body">
    <form action="project_count_post.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1"> Title </label>
        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Total Products</label>
        <input type="text" name="total_count" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
      </div>
    <div class="form-group">
        <label for="exampleInputPassword1">status</label>
        <select name="status"  class="form-control"  id="">
            <option value="active">Active</option>
            <option value="deactive">Deactive</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">icon</label>
      <input type="text" name="icon" id="iconStore" class="form-control" value=" " />
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

   
    <button type="submit" class="btn btn-primary" name="project_count_insert">Submit</button>
</form>
  </div>
</div>
</div>









<?php

include "./extends/footer.php";

?>