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
<script src="dist/js/d3.min.js"></script>


<style>
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
<div class="wrapper">
<?php
include('topHeader.php');
include('leftHeader.php');
?>
<?php include_once("analyticstracking.php") ?>
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

            <div class="box-body">
              <div id="container">
                <div id="body">

                    <!-- <section class="content-header">
                      <input type="hidden" name="value1" id="value1">

                        <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-"></i> </a></li>
                    </section>-->

                    <div class="left-col-content-title">
                        <h3>Fare Information</h3>

                        
                        



                     <!-- Visualization-->
                      <!-- Buffer-->

                        
 
                    </div>

                    <select id='selector' >
                     
                      <option value="Ruiru town">Ruiru town</option>
                      <option value="Ndenderu">Ndenderu</option>
                      <option value="UoN">UoN</option>
                    </select>
                   
                    <style>
                    #survey{
                      position: absolute;
                      right:10px;

                    }
                    </style>

                   <button id = "survey" class= "button_example" onclick="window.location='https://docs.google.com/forms/d/1Clh64cQ80n7oYJe043TED0gIKSWq-paQ6fij6gTRImo/viewform'">Survey!</button>



                        <div id="chart-area"></div>

                       <script src="dist/js/visualization.js"></script>
                      </div>
                     <div class="left-col-content">
                      <style>
                      .axis path,
                      .axis line {
                        fill: none;
                        stroke: #000;
                        shape-rendering: crispEdges;
                      }

                      .x.axis path {
                        display: none;
                      }

                      .line {
                        fill: none;
                        stroke: #FF0066;
                        stroke-width: 3px;
                      }

                      </style>

   


                          <!-- Insert Visualization of Fare data-->
                          <!-- Parent container for the scatterplot -->
                        




                    <script src="dist/js/jquery-1.9.0.min.js"></script>

                </div>
              </div>
            </div>
        </div>
      </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
<?php
  include('footer.html');
?>

</body>
</html>

<?php
}
  ?>