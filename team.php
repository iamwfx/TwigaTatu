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
<!DOCTYPE>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <!--incase of problem,remove this line-->
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>TwigaTatu</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="dist/css/bootstrap.css"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<link rel="stylesheet" href="dist/css/rzslider.css"/>
<link rel="stylesheet" href="dist/css/style.css" type="text/css" />
<script src="dist/js/angular.js"></script>
<script src="dist/js/ui-bootstrap-tpls.js"></script>
<script src="dist/js/rzslider.js"></script>

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
        <h3>Meet Our Awesome Team</h3>
      </div>

<br>


<div id="dropdown">
       <div id="center" class="cascade">
<div class="col-md-4" >
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user"style=" border:none;  background:#f4f4f4; float:left; margin-bottom:30px; overflow:hidden; height:auto; padding:10px;">
            <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="content"style="padding-bottom:10px; overflow: hidden;"> 
        <img src="dist/images/team/lily.jpg" /style="height:206px;width:206px;padding-bottom:10px;">
      <p><span style="padding-bottom:10px; border-bottom: 1px solid #dddddd;  color:#66a8ce; display:block;">Lily Bui</span></p>
      <p style="padding-bottom:20px;">MIT Comparative Media Studies<br></p>
      <a href="#" style="color:#ffffff; background:#66a7c5; padding:7px; text-decoration:none;">visit site</a> 
    </div>
  </div>
  </div> <div class="col-md-4" >
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user"style=" border:none;  background:#f4f4f4; float:left; margin-bottom:30px; overflow:hidden; height:auto; padding:10px;">
            <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="content"style="padding-bottom:10px; overflow: hidden;"> 
        <img src="dist/images/team/mary.jpg" /style="height:206px;width:206px;padding-bottom:10px;">
      <p><span style="padding-bottom:10px; border-bottom: 1px solid #dddddd;  color:#66a8ce; display:block;">Mary Makau</span></p>
      <p style="padding-bottom:20px;">UoN School of Computing And Informatics</p>
      <a href="#" style="color:#ffffff; background:#66a7c5; padding:7px; text-decoration:none;">visit site</a> 
    </div>
  </div>
  </div>
      
        <!-- /.col -->
        <div class="col-md-4" >
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user"style=" border:none;  background:#f4f4f4; float:left; margin-bottom:30px; overflow:hidden; height:auto; padding:10px;">
            <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="content"style="padding-bottom:10px; overflow: hidden;"> 
        <img src="dist/images/team/wenfei.jpg" /style="height:206px;width:206px;padding-bottom:10px;">
      <p><span style="padding-bottom:10px; border-bottom: 1px solid #dddddd;  color:#66a8ce; display:block;">Wenfei Xu</span></p>
      <p style="padding-bottom:20px;">MIT Architecture And Urban Planning</p>
      <a href="#" style="color:#ffffff; background:#66a7c5; padding:7px; text-decoration:none;">visit site</a> 
    </div>
  </div>            
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
