
<?php

session_start();
include('./config/db.php');

$select = "SELECT * FROM users";
$connect_user = mysqli_query($db_connect,$select);
$user = mysqli_fetch_assoc($connect_user);


//serviecs query
$select_query = "SELECT * FROM services WHERE status='active'";
$service= mysqli_query($db_connect,$select_query);
//profios query
$select_query = "SELECT * FROM pratfios WHERE status='active'";
$profio= mysqli_query($db_connect,$select_query);

//project count query
$select_query = "SELECT * FROM project_counts WHERE status='active'";
$counts= mysqli_query($db_connect,$select_query);

//testimonials query
$select_query = "SELECT * FROM testimonials WHERE status='active'";
$testimonial= mysqli_query($db_connect,$select_query);

// //profios query
$select_query = "SELECT * FROM banners WHERE status='active'";
$banner= mysqli_query($db_connect,$select_query);

// // about query
$select_query = "SELECT * FROM abouts WHERE id=1";
$about= mysqli_query($db_connect,$select_query);

// // education query
$select_query = "SELECT * FROM educations";
$educationss= mysqli_query($db_connect,$select_query);


?>

<!doctype html>
<html class="no-js" lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio Websote</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        <link rel="stylesheet" href="./frontend_assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./frontend_assets/css/animate.min.css">
        <link rel="stylesheet" href="./frontend_assets/css/magnific-popup.css">
        <link rel="stylesheet" href="./frontend_assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="./frontend_assets/css/flaticon.css">
        <link rel="stylesheet" href="./frontend_assets/css/slick.css">
        <link rel="stylesheet" href="./frontend_assets/css/aos.css">
        <link rel="stylesheet" href="./frontend_assets/css/default.css">
        <link rel="stylesheet" href="./frontend_assets/css/style.css">
        <link rel="stylesheet" href="./frontend_assets/css/responsive.css">
</head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.html" class="navbar-brand logo-sticky-none"><img src="frontend_assets/img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none"><img src="frontend_assets/img/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="frontend_assets/img/logo/logo.png" alt="" />
                    </a>
                </div>
                <?php foreach($about as $item):?>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p><?=$item['address']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p><?=$item['phone']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><?=$item['email']?></p>
                    </div>
                </div>
               
                <div class="social-icon-right mt-20">
                    <a href="<?=$item['faccebook']?>"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?=$item['linkend']?>"><i class="fab fa-linkedin"></i></a>
                    <a href="<?=$item['google']?>"><i class="fab fa-google-plus-g"></i></a>
                    <a href="<?=$item['instagram']?>"><i class="fab fa-instagram"></i></a>
                </div>
                <?php endforeach?>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                             <?php foreach($about as $item):?>
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am  <?= $item['name'] ?></h2>
                               
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$item['short_description']?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                   
               
                                        <li><a href="<?=$item['faccebook']?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?=$item['linkend']?>"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="<?=$item['instagram']?>"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="<?=$item['google']?>"><i class="fab fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                               
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img style="width: 339px;height: 384px;padding: 15px;margin: 0px 76px 205px 0px;" src="./images/about/<?=$item['image_pro']?>" alt="">
                            </div>
                        </div>
                    </div> <?php endforeach?>
                </div>
                <div class="banner-shape"><img src="frontend_assets/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                    <?php foreach($about as $item):?>
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img style="width: 70%;  " src="./images/about/<?=$item['image']?>" title="me-01" alt="me-01">
                            </div>
                        </div>
                       
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>

                            <div class="about-content">
                                <p><?=$item['about_des']?></p>
                                <h3>Education:</h3>
                            </div>
                            <!-- Education Item -->
                           <?php foreach($educationss as $row):?>
                            <div class="education">
                                <div class="year"><?=$row['year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$row['title']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 65%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>
                            <!-- End Education Item -->
                            
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
                     <?php foreach($service as $item): ?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?=$item['icon']?>"></i>
								<h3><?=$item['title']?></h3>
								<p><?php echo substr($item['description'],0,60)?></p>
							</div>
						</div>
				    <?php endforeach;?>		
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       <?php foreach($profio as $item):?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img style="width:389px; height:336px" src="./images/profio/<?=$item['image']?>" alt="img">
								</div>
								<div class="speaker-overlay">
                                    <span><?=$item['title']?></span>
									<h4><a href="portfolio-single.html"><?=$item['profio_name']?> </a></h4>
									<a href="single_post.php?details=<?=$item['id']?>" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                       <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">

                            <?php foreach($counts as $item): ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?=$item['icon']?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?=$item['total_count']?></span></h2>
                                        <span><?=$item['title']?> </span>
                                    </div>
                                </div>
                            </div>
                           <?php endforeach;?> 
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                             <?php foreach($testimonial as $item):?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar" >
                                        <img style="width: 12%; height:16%;border-radius: 50%; " src="./images/testimonial/<?=$item['image']?>"  alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> <?=$item['description']?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?=$item['name']?> </h5>
                                            <span><?=$item['title']?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                        <?php foreach($banner as $item):?>
                        <div class="col-xl-2" style="padding: 6px;width: 253px;margin: 0px 105px;">
                            <div class="single-brand">
                                
                                <img style="width: 250px;height:250px;padding: 33px 31px;" src="./images/banner/<?=$item['image']?>" alt="img">
                            
                            </div>
                        </div>
                       <?php endforeach?>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <?php foreach($about as $item):?>
                            <div class="contact-content">
                                <p><?=$item['contact_description']?></p>
                                <h5>OFFICE IN <span>NEW YORK</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?=$item['address']?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?=$item['phone']?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?=$item['email']?></li>
                                    </ul>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                            <form action="email_post.php" method="POST">
                                <div class="form-floating mb-3">
                                <label for="floatingInput">User name</label>
                                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                               
                                </div>
                                <div class="form-floating">
                                <label for="floatingPassword">Email</label>
                                <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="Password">
                               <br>
                                </div>
                                    <label for="floatingPassword">message</label>
                                    <textarea name="message" class="form-control" placeholder="your message *"></textarea>
                                    <br>
                                    <button class="btn" name="mail_send">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="frontend_assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="frontend_assets/js/popper.min.js"></script>
        <script src="frontend_assets/js/bootstrap.min.js"></script>
        <script src="frontend_assets/js/isotope.pkgd.min.js"></script>
        <script src="frontend_assets/js/one-page-nav-min.js"></script>
        <script src="frontend_assets/js/slick.min.js"></script>
        <script src="frontend_assets/js/ajax-form.js"></script>
        <script src="frontend_assets/js/wow.min.js"></script>
        <script src="frontend_assets/js/aos.js"></script>
        <script src="frontend_assets/js/jquery.waypoints.min.js"></script>
        <script src="frontend_assets/js/jquery.counterup.min.js"></script>
        <script src="frontend_assets/js/jquery.scrollUp.min.js"></script>
        <script src="frontend_assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="frontend_assets/js/jquery.magnific-popup.min.js"></script>
        <script src="frontend_assets/js/plugins.js"></script>
        <script src="frontend_assets/js/main.js"></script>
    </body>

</html>
