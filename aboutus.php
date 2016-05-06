<?php
ob_start();
session_start();
//initalize user class
//print_r($_SESSION);
if($_SESSION['logged']=="")
  header('Location: login/index.php');

else{
include('database/connection.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>TwigaTatu</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="dist/css/bootstrap.css"/>
<link rel="stylesheet" href="dist/css/rzslider.css"/>
<link rel="stylesheet" href="dist/css/style.css" type="text/css" />
<script src="dist/js/angular.js"></script>
<script src="dist/js/ui-bootstrap-tpls.js"></script>
<script src="dist/js/rzslider.js"></script>



<!--slider stle-->
<script>
function toggle_visibility(id) {
    var e = document.getElementById(id);
    var myClasses = document.querySelectorAll('.income'),
    i = 0,
    l = myClasses.length;

    for (i; i < l; i++) {
       myClasses[i].style.display = 'none';
    }
    if (e.style.display == 'none') e.style.display = 'block';

}
</script>
<style>
* {
    margin: 0;
    padding: 0;
        outline: none;
}label > input[type="radio"]{
  visibility: hidden;
  position: absolute;
}label > input + img{
cursor: pointer;
border: 2px solid transparent;
}
label > input:checked + img{
  border:2px solid #f00;
}
.wrapper1 {
    background: white;
    padding-left: 40px;
    padding-right: 40px;
}
article {
    margin-bottom: 10px;
}
.left-col-content-title {
  width:100%;
  height:60px;
  background:url(dist/images/left-column-title-bg2.png) no-repeat;
}
.left-col-content-title h3 {
  padding-left:20px;
  font-size:20px;
  font-weight:normal;
  color:#ffffff;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
  padding-top:10px;
}
</style>
<!--  Google Analytics Tracker -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77225730-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php include_once("analyticstracking.php") ?>
<div class="wrapper">
<?php
include('topHeader.php');
include('leftHeader.php');
?>
<section class="content">

      <div class="row">

       <div class="col-md-11">
      <div class="box box-warning">
            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <section class="content">
      <div class="row">
        <div class="callout callout-warning"style="width:100%;">
        <p><img src="dist/images/header-bg.jpg" style="width:80%;padding-left:20px;"></p>
      </div>
       <div class="col-md-11">
      <div class="box box-warning">
                        <!-- /.box-header -->
            <div class="box-body">
              <div id="container">
  <div id="body">
             <form id="savecascade">
                <!-- text input -->
                  <section class="content-header">
<input type="hidden" name="value1" id="value1">

      <ol class="breadcrumb">
<li><a href="#"><i class="fa fa-"></i> </a></li>
    </section>
    <div class="left-col-content-title">
        <h3>About TwigaTatu</h3>
      </div>

<br>


<div id="dropdown">
       <div id="center" class="cascade">
<label>NEED CHANGE? HELP US MAKE ONE.</label>
<p>TwigaTatu is an application that allows users to share and get matatu fare information. It is also a personal budgeting tool that helps you track how much you are spending on matatus.</p>
<p>We are a small student team from University of Nairobi and Massachusetts Institute of Technolgoy working with <a href="http://ma3route.com">ma3route</a> to create a tool that benefits matatu users in Nairobi.</p>
<p>Your <a href="http://goo.gl/forms/rm2A9VkGFk">feedback</a> is very meaningful to us, so please share your thoughts with us! </p>         
          </div>

        <div class="cascade" id="state"></div> 
          <div class="cascade" id="state2" ></div>
           <div class="cascade" id="city" ></div> 
        </div>


</form> </div>  </div>
  <script src="dist/js/jquery-1.9.0.min.js"></script>

            </div></div></div></div></section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include('footer.html');
  ?>

</body>
</html>
<?php } ?>
