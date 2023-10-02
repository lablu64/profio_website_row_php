
<?php 
   
   include 'extends/header.php';
   ?>
         


<div class="row">
               <div class="col">
                <div class="page-description">
                <h1 class="text-danger">Profile</h1>



                </div>
            </div>
        </div>


            <div class="row" >

            <!-- user name update start -->
                <div class="col-6"  >
                    <div class="card">
                        <div class="card-header" >
                            <h2 >Update name</h2>
                        </div>
                        <div class="card-body">
                        <form action="profile_post.php" method="POST">
                        <label  style="font-size: 20px;" for="exampleInputEmail1" class="form-label ">Name</label>
                        <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="signUpUsername" name="name" placeholder="Enter your new name">
                        <br>
                        <button type="submit" class="submit btn btn-primary" name="name_update" >Update name</button>
                        </form>

                        </div>
                    </div>
                </div>
                 <!-- user name update end -->

                 <!-- user email update start -->
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h1 >Update Email</h1>
                        </div>
                        <div class="card-body">
                            <form action="profile_post.php" method="POST">
                                <label style="font-size: 20px;" for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="signUpUsername" placeholder="Enter your new email" name="email">
                                <br>
                                <button type="submit" name="email_update" class="btn btn-primary">update email</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- user email update end -->
                  <!-- user password update start -->
                  <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Update Password</h4>

                                    </div>
                                    <div class="card-body">
                                    <form action="profile_post.php" method="POST">   
                                    <label for="signInEmail" class="form-label">current Password </label>
                                    <input type="password" name="current_password" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail" >
                                    
                                    <label for="signInEmail" class="form-label">new Password </label>
                                    <input type="password" name="new_password" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail" >
                                   
                                    <label for="signInEmail" class="form-label">confirm Password </label>
                                    <input type="password" name="confirm_password" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail" >
                                   

                                <button type="submit" class="btn btn-danger" name="update_password" >update password</button>
                                </form> 
                                    </div>
                                </div>
                         </div>
                         
                 
                   <!-- user password update end --> 
                   
                   <!-- image update start -->
                   <div class="col-6"  >
                    <div class="card">
                        <div class="card-header" >
                     
                         <h2>  Update profile image</h2>
                        </div>
                       
                        <div class="card-body">
                        <form action="profile_post.php" method="POST" enctype="multipart/form-data">
                       <div>
                       <img src="../images/profile/<?=  $_SESSION['admin_image'] ?>" style="width: 100px; height: 100px; border-radius: 50%; ">
                       </div>
                       <br>
                        <label for="exampleInputEmail1" class="form-label">Image</label>
                        <input type="file" class="form-control " id="exampleInputEmail1" aria-describedby="signUpUsername" name="image" >
                        <button type="submit" class=" btn btn-primary" name="image_update" >Update image</button>
                        </form>

                        </div>
                    </div>
                </div> 


            </div>


  

            <div class="row" >
                


                

             



          </div>


            
          

        


     <!-- <div class="row">
         <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h1>Update name</h1>
                </div>
            <div class="card-body">
            <form action="profile_post.php" method="POST" >
            <label for="signUpUsername" class="form-label">Email address</label>
            <input type="text" class="form-control m-b-md bg-dark  " id="signUpUsername" aria-describedby="signUpUsername" placeholder="Enter name" name="name">
            <button class="submit btn btn-primary" name="name_update">Update name</button>
            
            </form>
        
            </div>
        </div>
        </div>
      </div>  -->


<?php 

require('./extends/footer.php');

?>   

                      
    <?php
     include 'extends/footer.php'
     ?>

     <!-- profile update session massage start -->
 
  <!-- <script>
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
    // profile name update massage show
    <?php if(isset($_SESSION['name_update_massage'])): ?>
    Toast.fire({
    icon: 'success',
    title: '<?=$_SESSION['name_update_massage']?>',
    })
    <?php endif;unset($_SESSION['name_update_massage'])?>

    // profile email massage insert
    <?php if(isset($_SESSION['email_update_massage'])): ?>
    Toast.fire({
    icon: 'success',
    title: '<?=$_SESSION['email_update_massage']?>',
    })
    <?php endif;unset($_SESSION['email_update_massage'])?>

    
    // profile password massage insert
    <?php if(isset($_SESSION['password_update_massage'])): ?>
    Toast.fire({
    icon: 'success',
    title: '<?=$_SESSION['password_update_massage']?>',
    })
    <?php endif;unset($_SESSION['password_update_massage'])?>

    
    // profile image massage insert
    <?php if(isset($_SESSION['image_update_massage'])): ?>
    Toast.fire({
    icon: 'success',
    title: '<?=$_SESSION['image_update_massage']?>',
    })
    <?php endif;unset($_SESSION['image_update_massage'])?>
</script> -->
