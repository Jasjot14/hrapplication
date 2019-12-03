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
        
        <?php
$con = mysql_connect("localhost","root","");
 $db = mysql_select_db("HRapp",$con);
 $get=mysql_query("SELECT * FROM Manager ORDER BY employee_id ASC");
$option = '';
 while($row = mysql_fetch_assoc($get))
{
  $option .= '<option value = "'.$row['employee_id'].'">'.$row['employee_id'].','.$row['first_name'].','.$row['last_name'].'</option>';
}


$job=mysql_query("SELECT * FROM job");
$jobs = '';
 while($row = mysql_fetch_assoc($job))
{
  $jobs .= '<option value = "'.$row['job_id'].'">'.$row['job_id'].','.$row['job_title'].'</option>';
}


$dept=mysql_query("SELECT * FROM department");
$depts = '';
 while($row = mysql_fetch_assoc($dept))
{
  $depts .= '<option value = "'.$row['department_id'].'">'.$row['department_id'].','.$row['department_name'].'</option>';
}


?>
<form action="" method="post">
    <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" name="p_first_name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" name="p_last_name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="p_hire_date"  value="  <?php echo date("y/m/d") ; ?>">
                                        </div>
                                   
                                        <div class="form-group">
                                            
                                             <div class="form-group">
                                                <label>Manager</label>
                                            <select class="form-control" id="" name="p_manager_id">
                                                <?php echo $option; ?>
                                               
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="p_phone" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                            <div class="form-group">
                                            <input type="email" class="form-control" name="p_email" placeholder="Your Email *" value="" required>
                                        </div>
                                             <div class="form-group">
                                            <input type="number" class="form-control" name="p_salary" placeholder="Salary *" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Job</label>
                                            <select class="form-control"  name="p_job_id">
                                                <?php echo $jobs;?>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Department</label>
                                            <select class="form-control"  name="p_department_id">
                                               <?php echo $depts;?>
                                            </select>
                                        </div>
                                        </div>
                                        <input type="submit" class="btnRegister" name="s1"  value="Register"/>
                                    </div>
     
   
  </form>
            </div><!-- /.container -->

            <?php
         $link = mysqli_connect("localhost", "root", "", "hrapp");
 
            if (isset($_POST['s1'])){
 $FIRST_NAME=$_POST['p_first_name'];
  $LAST_NAME=$_POST['p_last_name'];
   $HIRE_DATE=$_POST['p_hire_date'];
    $EMAIL=$_POST['p_email'];
     $PHONE_NUMBER=$_POST['p_phone'];
      $SALARY=$_POST['p_salary'];
       $JOB_ID=$_POST['p_job_id'];
        $MANAGER_ID=$_POST['p_manager_id'];
         $Department_ID=$_POST['p_department_id'];
         $insert="insert into employee_hiring values ('','$FIRST_NAME','$LAST_NAME','$EMAIL','$PHONE_NUMBER','$HIRE_DATE','$SALARY','$JOB_ID','$MANAGER_ID','$Department_ID')";

if(mysqli_query($link, $insert)){
    echo "Records inserted successfully.";
}

 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
mysqli_close($link);

?>
        </section><!-- /.service-style-one -->

       

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