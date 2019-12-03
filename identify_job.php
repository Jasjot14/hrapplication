<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ashik.templatepath.net/payonline-preview-files/testimonials.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Dec 2019 12:24:21 GMT -->
<head>
    <meta charset="UTF-8"/>
    <title>Testimonials || PayOnline || Online Payroll and HR Software HTML Template</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <!-- depdency stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i%7CCovered+By+Your+Grace" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="plugins/payonline-icon/style.css">
    <link rel="stylesheet" type="text/css" href="plugins/bands-icon/style.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.min.css">
    
    

    <!-- main template stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<div class="page-wrapper">

    <div class="preloader"></div><!-- /.preloader -->
    
   <?php include 'header.php';?>

    <div class="inner-banner text-center">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                </li>
                <li>
                    <span>Testimonials</span>
                </li>
            </ul><!-- /.breadcrumb -->
            <h1>Testimonials</h1>
        </div><!-- /.container -->
    </div><!-- /.inner-banner -->
    
    <section class="testimonials-style-three sec-pad testimonials-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="single-testimonial-style-three hvr-sweep-to-bottom">
                        <i class="payonline-icon-left-quotes-sign"></i>
                        
                        <div class="client-box">
                            <form action="" method="post">
                           <div class="form-group">
                                                <label>Job ID</label>
                                           <input type="text" class="form-control" placeholder="Enter Job ID" value="" name="jobid" />
                                           <input type="submit" class="btn btn-primary" name="s2" value="Submit">
                                       </div></form>
                                        </div>
                        </div><!-- /.client-box -->
                    </div><!-- /.single-testimonial-style-three -->
                </div><!-- /.item -->
               <?php

                $link = mysqli_connect("localhost", "root", "", "hrapp");
                if (isset($_POST['s2'])) {
                   
        $job_id=$_POST['jobid'];
                  $select= "select job_title from job where job_id= '$job_id'";
$fet= mysqli_query($link,$select);
echo "<table class='table table-bordered'>
<tr>
<td>Description</td>
</tr>";
while ($data =mysqli_fetch_array($fet))
{
    
    echo "<tr>
   <td> $data[0]</td>
   </tr>";
}


echo "</table>";
}
                
                
               

               ?>
               
               
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.testimonials-style-three -->

    <?php include 'footer.php';?>


</div><!-- /.page-wrapper -->

<section class="hidden-sidebar side-navigation">
    <span class="close-button side-navigation-close-btn fa fa-close"></span><!-- /.close-button -->
    <div class="sidebar-content">
        <img src="images/hidden-bar-image-1-1.jpg" alt="Awesome Image"/>
        <p>Prefer speaking with a human to filling out a form? Call our corporate office and we will connect you with a team member <br> who can help.</p>
        <p class="contact-info"><i class="fa fa-phone"></i>2800 666 999</p><!-- /.contact-info -->
        <a href="#" class="download-btn one"><i class="fa fa-file-pdf-o"></i> Looking for your W-2?</a>
        <a href="#" class="download-btn two"><i class="fa fa-building-o"></i> Payonline Sales Offices</a>
    </div><!-- /.sidebar-content -->
</section><!-- /.hidden-sidebar -->

<div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
    <div class="search_box_inner">
        <div class="input-box">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-box-btn"> <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button> </span>
        </div>
    </div>
</div>


<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
<!-- /.scroll-to-top -->


<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/theme.js"></script>


</body>

<!-- Mirrored from ashik.templatepath.net/payonline-preview-files/testimonials.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Dec 2019 12:24:21 GMT -->
</html>