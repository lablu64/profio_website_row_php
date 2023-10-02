<?php
include "../config/db.php";
include "./extends/header.php";


?>
<div class="row">
<div class="card col-lg-12 ">
  <div class="card-header bg-success">
    <h2>New testimonial Create</h2>
  </div>
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">testimonial</li>
  </ol>
</nav>
<div class="card col-lg-10 ">
  <div class="card-header">
    <h2>New testimonial Insert</h2>
  </div>
  <div class="card-body">
    <form action="testimonial_post.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">testimonial Name </label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">testimonial Title </label>
        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
      <textarea name="description"  class="form-control"  id="" cols="5" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">status</label>
        <select name="status"  class="form-control"  id="">
            <option value="active">Active</option>
            <option value="deactive">Deactive</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">image</label>
      <input type="file" name="image" id="iconStore" class="form-control"  />
    </div>

   
    <button type="submit" class="btn btn-primary" name="testimonial_insert">Submit</button>
</form>
  </div>
</div>
</div>

<?php

include "./extends/footer.php";

?>