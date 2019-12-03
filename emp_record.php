<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ashik.templatepath.net/payonline-preview-files/solutions.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Dec 2019 12:22:54 GMT -->
<head>
    <meta charset="UTF-8"/>
    <title>All Solutions || PayOnline || Online Payroll and HR Software HTML Template</title>
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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- main template stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<div class="page-wrapper">

    <div class="preloader"></div><!-- /.preloader -->
    
    <?php include 'header.php'; ?>

    <div class="inner-banner text-center">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Our Solutions</a>
                </li>
                <li>
                    <span>All Solutions</span>
                </li>
            </ul><!-- /.breadcrumb -->
            <h1>All Solutions</h1>
        </div><!-- /.container -->
    </div><!-- /.inner-banner -->

    <section class="service-style-one sec-pad solutions-page">
        <div class="container">
            <h1>Employee Hiring Form</h1>
            <hr>
           
</div>
 <?php
         $link = mysqli_connect("localhost", "root", "", "hrapp");
 
        $select= "select * from employee_hiring";
$fet= mysqli_query($link,$select);
echo "<table class='table table-bordered'>
<tr>
<td>id</td>
<td>FirstName</td>
<td>LastName</td>
<td>Email</td>
<td>Phone </td>
<td>Date</td>
<td>Salary</td>
<td>Job</td>
<td>Manager</td>
<td>Department</td>
<td></td>
</tr>";



while ($data =mysqli_fetch_array($fet))
{
    
    echo "<tr>
   <td> $data[0]</td>
    <td>$data[1]</td>
    <td>$data[2]</td>
    <td>$data[3]</td>
    <td>$data[4] &nbsp; <a href='' data-toggle='modal' data-target='#myModal'>Edit</a></td>
    <td>$data[5]</td>
    <td>$data[6]</td>
    <td>$data[7]</td>
     <td>$data[8]</td>
      <td>$data[9]</td>
      <td><a href='delete.php?id=$data[0]'>Delete</a></td>
  
    </tr>";
}
echo"<table>";
?>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4>Update Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body">
            <form action="" method="post">
         <div class="form-group">
                             <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="New Phone *" value="" />
                                        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" name="update" data-dismiss="modal">Update</button>
        </div>
      </div>
      
    </div>
  </div>
   <?php 
 $link = mysqli_connect("localhost", "root", "", "hrapp");
 
if (isset($_POST['update'])) {
    $phone=$_POST['phone'];
    $id = $_GET['id'];
      $update="update employee_hiring set phone= '$phone' where id='$id'";

if(mysqli_query($link, $update)){
    echo "Phone updated  successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
}
    ?>
        </section>
       

   <?php include 'footer.php'; ?>


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
<script src="js/theme.js"></script>


</body>
</html>