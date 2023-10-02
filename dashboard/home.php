
   <?php 
     include '../config/db.php';
    include 'extends/header.php';

        //services start
       $services = "SELECT * FROM services";
        $connet_query = mysqli_query($db_connect,$services);
       $services= mysqli_fetch_all($connet_query);

       $deactiveServices_query = "SELECT * FROM services WHERE status='deactive'"; 
       $connet_query = mysqli_query($db_connect,$deactiveServices_query);
       $deactiveServices= mysqli_fetch_all($connet_query);

       $activeServices_query = "SELECT * FROM services WHERE status='active'";
       $activeServices_query_connet = mysqli_query($db_connect,$activeServices_query);
       $activeServices= mysqli_fetch_all($activeServices_query_connet);
       //services end
       //banner start
       $banners = "SELECT * FROM banners";
       $connet_query = mysqli_query($db_connect,$banners);
       $banners= mysqli_fetch_all($connet_query);

      $deactiveBanner_query = "SELECT * FROM banners WHERE status='deactive'"; 
      $connet_query = mysqli_query($db_connect,$deactiveBanner_query);
      $deactiveBanner= mysqli_fetch_all($connet_query);

      $activeBanner_query = "SELECT * FROM banners WHERE status='active'";
      $query_connet = mysqli_query($db_connect,$activeBanner_query);
      $activeBanner= mysqli_fetch_all($query_connet);
     //banner end

       //profio start
       $pratfios = "SELECT * FROM pratfios";
       $connet_query = mysqli_query($db_connect,$pratfios);
       $pratfios= mysqli_fetch_all($connet_query);

      $deactiveprofio_query = "SELECT * FROM pratfios WHERE status='deactive'"; 
      $connet_query = mysqli_query($db_connect,$deactiveprofio_query);
      $deactiveprofio= mysqli_fetch_all($connet_query);

      $activeprofio_query = "SELECT * FROM pratfios WHERE status='active'";
      $query_connet = mysqli_query($db_connect,$activeprofio_query);
      $activeprofio= mysqli_fetch_all($query_connet);
     //profio end

        //testimonials start
        $testimonials = "SELECT * FROM testimonials";
        $connet_query = mysqli_query($db_connect,$testimonials);
        $testimonials= mysqli_fetch_all($connet_query);
 
       $deactivetestimonial_query = "SELECT * FROM testimonials WHERE status='deactive'"; 
       $connet_query = mysqli_query($db_connect,$deactivetestimonial_query);
       $deactivetestimonial= mysqli_fetch_all($connet_query);
 
       $activetestimonial_query = "SELECT * FROM testimonials WHERE status='active'";
       $query_connet = mysqli_query($db_connect,$activetestimonial_query);
       $activetestimonial= mysqli_fetch_all($query_connet);
      //testimonials end
      
        //project_counts start
        $project_counts = "SELECT * FROM testimonials";
        $connet_query = mysqli_query($db_connect,$project_counts);
        $project_counts= mysqli_fetch_all($connet_query);
 
       $deactiveproject_count_query = "SELECT * FROM testimonials WHERE status='deactive'"; 
       $connet_query = mysqli_query($db_connect,$deactiveproject_count_query);
       $deactiveproject_count= mysqli_fetch_all($connet_query);
 
       $activeproject_counts_query = "SELECT * FROM testimonials WHERE status='active'";
       $query_connet = mysqli_query($db_connect,$activeproject_counts_query);
       $activeproject_count= mysqli_fetch_all($query_connet);
      //project_counts end

       //user start
       $users = "SELECT * FROM users";
       $connet_query = mysqli_query($db_connect,$users);
       $users= mysqli_fetch_all($connet_query);

       //user end
    
    ?>
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Dashboard</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- service start -->
                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <a style="text-decoration: none;" href="./service.php">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-primary">
                                                <i class="material-icons-outlined">support_agent </i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title"> Total Services</span>
                                                <span class="widget-stats-amount"><?=count($services)?></span>
                                                <span class="widget-stats-info text-success ">Active Services : <?=count($activeServices)?> </span>
                                               
                                                <span class="widget-stats-info text-danger">Deactive Services : <?=count($deactiveServices)?></span>
                                              
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <!-- banner start -->
                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <a style="text-decoration: none;" href="./banner.php">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-success">
                                                <i class="material-icons-outlined">map</i> 
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title"> Total Banner</span>
                                                <span class="widget-stats-amount"><?=count($banners)?></span>
                                                <span class="widget-stats-info text-success ">Active Banner : <?=count($activeBanner)?> </span>
                                               
                                                <span class="widget-stats-info text-danger">Deactive Banner : <?=count($deactiveBanner)?></span>
                                              
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                              <!-- profios start -->
                              <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <a style="text-decoration: none;" href="./profio.php">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-primary">
                                                <i class="material-icons-outlined">person </i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title"> Total Profio</span>
                                                <span class="widget-stats-amount"><?=count($pratfios)?></span>
                                                <span class="widget-stats-info text-success ">Active profio : <?=count($activeprofio)?> </span>
                                               
                                                <span class="widget-stats-info text-danger">Deactive profio : <?=count($deactiveprofio)?></span>
                                              
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                             <!-- testimonial start -->
                             <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <a style="text-decoration: none;" href="./testimonial.php">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-success">
                                                <i class="material-icons-outlined">local_fire_department </i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title"> Total Testimonial</span>
                                                <span class="widget-stats-amount"><?=count($testimonials)?></span>
                                                <span class="widget-stats-info text-success ">Active testimonials : <?=count($activetestimonial)?> </span>
                                               
                                                <span class="widget-stats-info text-danger">Deactive testimonials : <?=count($deactivetestimonial)?></span>
                                              
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                             <!-- Project count start -->
                             <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <a style="text-decoration: none;" href="./project_count.php">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-info">
                                                <i class="material-icons-outlined">manage_accounts </i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title"> Total project</span>
                                                <span class="widget-stats-amount"><?=count($project_counts)?></span>
                                                <span class="widget-stats-info text-success ">Active project : <?=count($activeproject_count)?> </span>
                                               
                                                <span class="widget-stats-info text-danger">Deactive project : <?=count($deactiveproject_count)?></span>
                                              
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-warning">
                                                <i class="material-icons-outlined">face</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Total Users</span>
                                                <span class="widget-stats-amount"><?=count($users)?></span>
                                               
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                       
                       
     <?php
      include 'extends/footer.php'
      ?>