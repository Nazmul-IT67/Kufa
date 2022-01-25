<?php
  include'frontend/header.php';
  // session_start();
  require_once'db.php';
  $id=$_GET['id'];
  $select="SELECT * FROM portfolios WHERE id=$id ";
  $portfolio=mysqli_query($db, $select);
  $assoc=mysqli_fetch_assoc($portfolio);
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="style/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        <link rel="stylesheet" href="style/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/css/animate.min.css">
        <link rel="stylesheet" href="style/css/magnific-popup.css">
        <link rel="stylesheet" href="style/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="style/css/flaticon.css">
        <link rel="stylesheet" href="style/css/slick.css">
        <link rel="stylesheet" href="style/css/aos.css">
        <link rel="stylesheet" href="style/css/default.css">
        <link rel="stylesheet" href="style/css/style.css">
        <link rel="stylesheet" href="style/css/responsive.css">
    </head>
    <body class="theme-bg">
        <main>
            <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="breadcrumb-content text-center">
                                <h2>Portfolio Single POST</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="portfolio-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="single-blog-list">
                                <div class="blog-list-thumb mb-35">
                                    <img src="assets/portfolio/image/<?php echo$assoc['image']?>" alt="img">
                                </div>
                                <div class="blog-list-content blog-details-content portfolio-details-content">
                                    <h2>Consectetur neque elit quis nunc cras elementum</h2>
                                    <p>Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem
                                        egestliberos dolor auctor
                                        tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur,
                                        trist ligula pellentesque
                                        ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs
                                        the release of Letraset
                                        sheets containing Lorem Ipsum passags, and more recently with desktop publishing software
                                        like Aldus PageMaker including
                                        versions.</p>
                                    <div class="blog-list-meta">
                                        <ul>
                                            <li class="blog-post-date">
                                                <h3>Share On</h3>
                                            </li>
                                            <li class="blog-post-share">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php include'frontend/footer.php'?>