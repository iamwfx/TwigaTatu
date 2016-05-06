<?php
ob_start();
session_start();
//initalize user class
//print_r($_SESSION);
if($_SESSION['logged']=="")
  header('Location: login/index.php');

else{
include('database/connection.php');
$name=$_SESSION['names'];
$route=$_SESSION['route'];
$origin=$_SESSION['origin'];
$destination=$_SESSION['destination'];
$fare=$_SESSION['fare'];
$fetch =  <<<EOF
SELECT * FROM "fareData" WHERE name='$name';
EOF;
$query = pg_query($db, $fetch);
$rs = pg_fetch_array($query);

$fetch1 =  <<<EOF
SELECT * FROM "fareData" WHERE username='$name' AND fareamount=$fare AND routeid='$route' AND startid='$origin' AND stopid='$destination';
EOF;
$query1 = pg_query($db, $fetch1);
$rs1 = pg_fetch_array($query1);
echo"$fare";

if($rs1['timeoftravel']=='NULL')
{
echo"<script>alert('To access this page,first complete the fare sharing process by choosing your time of travel')</script>"; 
echo "<script>window.location.replace('conditions.php')</script> ";
}
else{
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TwigaTatu</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
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
<input type="hidden" name="fareamount" id="fareamount">

      <ol class="breadcrumb">
<li><a href="#"><i class="fa fa-"></i> </a></li>
    </section>
    <div class="left-col-content-title">
        <h3>Please Select Your Fare</h3>
      </div>

<br>


<div ng-app="rzSliderDemo">
    <div ng-controller="MainCtrl" class="wrapper1">
            <img class="displayed" id="img" width="70"style="display: block;
    margin-left: auto;
    margin-right: auto ">

        
      <article>
        <rzslider
          rz-slider-model="color_slider_bar.value"
          rz-slider-options="color_slider_bar.options"
        ></rzslider>
      </article>
      </div>
</div>
<script>
var app = angular.module('rzSliderDemo', ['rzModule', 'ui.bootstrap']);
app.controller('MainCtrl', function ($scope, $rootScope, $timeout, $modal) {
    $scope.color_slider_bar = {
      value: 10,
      options: {
        showSelectionBar: true,
        floor: 0,
            ceil: 200,
            step: 10,
        getSelectionBarColor: function(value) {
          if (value <= 30){
                        document.getElementById("fareamount").value = value;

            document.getElementById("img").src = "dist/images/giraffes/giraffe-smiling" + ".jpg";
            return '#2AE02A';}
         else if (value <= 60){
                      document.getElementById("fareamount").value = value;

             document.getElementById("img").src = "dist/images/giraffes/giraffe-smiling" + ".jpg";

            return 'yellow';}
          else if (value <= 90){
                        document.getElementById("fareamount").value = value;

          document.getElementById("img").src = "dist/images/giraffes/giraffe-smiling" + ".jpg";
            return 'orange';}
            else{
                          document.getElementById("fareamount").value = value;

          document.getElementById("img").src = "dist/images/giraffes/giraffetongue" + ".jpg";

          return 'red';
        }}}
    };});
</script>
<div class="left-col-content-title">
        <h3>Please Select Your Route</h3>
      </div>

<div id="dropdown">
       <div id="center" class="cascade">
          <?php
$sql =<<<EOF
SELECT * from allbus_routes ORDER BY rte_name;
EOF;

   $query = pg_query($db, $sql);
  
    ?>
            <label>Route:</label><br>
            <select name="country" id = "drop1">
              <option value="">Please Select</option>
              <?php while($rs = pg_fetch_array($query)){ 
              echo"<option value=".$rs['rte_id']."> ".$rs['rte_name']." </option>
              ";
            } ?>
            </select>
            
          </div>

        <div class="cascade" id="state"></div> 
           <div class="cascade" id="city" ></div> 
        </div>


            <button id="save" class="button_example">Save  Data</button>
</form> </div>  </div>
  <script src="dist/js/jquery-1.9.0.min.js"></script>
<script>
$(document).ready(function(){
$("#savecascade").submit(function(){
var get_data=$("#savecascade").serialize();
$.ajax({
      type: "POST",
      url: "database/inser_data.php",
      data: {"csc":get_data},
      cache: false,
      success: function(data) {    
    window.location.href = 'conditions.php'
      }
    });
return false;
});

$("select#drop1").change(function(){

  var route_id =  $("select#drop1 option:selected").attr('value'); 
// alert(route_id); 
  $("#state").html( "" );
    $("#state2").html( "" );
  $("#city").html( "" );
  if (route_id.length > 0 ) { 
    
   $.ajax({
      type: "POST",
      url: "database/fetch_state.php",
      data: "route_id="+route_id,
      cache: false,
      beforeSend: function () { 
        $('#state').html('<img src="dist/images/loader.gif" alt="" width="24" height="24">');
      },
      success: function(html) {    
        $("#state").html( html );
      }
    });
  } 
});
});
</script>


            </div></div></div></div></section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include('footer.html');
  ?>

</body>
</html>
<?php } }?>
