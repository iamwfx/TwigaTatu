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
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css1/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
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

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
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
<form id="savecascade" action="<?php echo  $_SERVER['PHP_SELF']?>" method="POST">
                <!-- text input -->
                  
<div class="left-col-content mar-top">

  <div class="left-col-content-title">
                 <h3>Time of travel</h3>
      </div><br>
            <div class="form-group">
                <div class="input-group date form_datetime col-md-5"  data-date-format="dd MM yyyy - HH:ii P" data-link-field="dtp_input1">
                    <input class="form-control" type="text" name="date" required value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
          <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
        <input type="hidden" id="dtp_input1" value="" /><br/>
            </div>
      <div class="left-col-content-title">
        <h3>Click Icons To Select Fare Condition</h3>
      </div>
  
  <div id="dropdowns">
       <div id="center" class="cascade">
<div id="income">
<p><div onclick="toggle_visibility('incometoggle');"><img id='hideshow' width="50" height="50"  src="dist/images/weather/icon_Clock.png"><br>Peak Hour </div>
    <div id="incometoggle" style="display:none;" class="income">
<label><input type="radio" name="peak" value="Peak Hour"><img width="50" height="50"  src="dist/images/weather/icon_Clock.png">Peak Hour</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" name="peak" value="Off-Peak"><img width="50" height="50"  src="dist/images/weather/icon_ClocK_GRAY.png">Off-Peak</label> </div>



<div onclick="toggle_visibility('incometoggle2');"><img id='hideshow2' width="50" height="50"  src="dist/images/weather/icon_Crowdsourcing.png"> <br>Rush Hour       
</div>
    <div id="incometoggle2" style="display:none;" class="income">
<label><input type="radio" name="rush" value="Rush Hour"><img width="50" height="50"  src="dist/images/weather/icon_Crowdsourcing.png">Rush Hour </label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" name="rush" value="Non-Rush Hour"><img width="50" height="50"  src="dist/images/weather/icon_Crowdsourcing_gray.png">Non-Rush Hour </label>
 </div>



<div onclick="toggle_visibility('incometoggle3');"><img id='hideshow3' width="50" height="50"  src="dist/images/weather/icon_rushhour.png"><br>Demand      
</div>
    <div id="incometoggle3" style="display:none;" class="income">
            <label><input type="radio" name="demand" value="High Demand"><img width="50" height="50"  src="dist/images/weather/icon_rushhour.png">High Demand </label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" name="demand" value="Low Demand"><img width="50" height="50"  src="dist/images/weather/icon_rushhour_GRAY.png">Low Demand</label>
    </div>


<div onclick="toggle_visibility('incometoggle4');"><img id='hideshow4' width="50" height="50"  src="dist/images/weather/icon_traffic.png"><br>Traffic Jam       
</div>
    <div id="incometoggle4" style="display:none;" class="income">
            <label><input type="radio" name="traffic" value="High Traffic"><img width="50" height="50" src="dist/images/weather/icon_traffic.png">High Traffic</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" name="traffic" value="Low/No Traffic"><img width="50" height="50"  src="dist/images/weather/icon_traffic_GRAY.png">Low/No Traffic</label>
    </div>



<div onclick="toggle_visibility('incometoggle5');"><img id='hideshow5' width="50" height="50"  src="dist/images/weather/icon_weather.png"><br>Weather               
</div>
    <div id="incometoggle5" style="display:none;" class="income">
 <label><input type="radio" name="weather" value="Good Weather"><img width="50" height="50"  src="dist/images/weather/icon_weather.png">Good Weather</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" name="weather" value="Bad Weather"><img  width="50" height="50" src="dist/images/weather/icon_weather_GRAY.png">Bad Weather</label>
    </div></p>
</div>
</div>
          </div>

        
    <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="jquery/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
        showMeridian: 1,

    });
  
</script>

        </div>

            <button id="save" class="button_example">Save  Data</button>
</form> </div>  </div>
  <script src="dist/js/jquery-1.9.0.min.js"></script>

            </div></div></div></div></section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include('footer.php');
  ?>

</body>
</html>
<?php
 if($_SERVER['REQUEST_METHOD']=="POST"){
  $username=$_SESSION['names'];
  $date=$_POST['date'];
  $peak=$_POST['peak'];
  $rush=$_POST['rush'];
  $traffic=$_POST['traffic'];
  $weather=$_POST['weather'];
  $demand=$_POST['demand'];
  if($date==""){echo"<script>alert('Please choose your travel time')</script>";exit();}
  if($peak!=""){$peakhour="$peak";}
  if($peak==""){ $peakhour="";}

 if($rush!=""){$rushhour="$rush";}
  if($rush==""){ $rushhour="";}

 if($traffic!=""){$trafficjam="$traffic";}
  if($traffic==""){ $trafficjam="";}

 if($weather!=""){$weatherhour="$weather";}
  if($weather==""){ $weatherhour="";}

 if($demand!=""){$demandhour="$demand";}
 if($demand==""){ $demandhour="";}



$sql=<<<EOF
UPDATE "fareData" SET peak='$peakhour',rush='$rushhour',traffic='$trafficjam',weather='$weatherhour',demand='$demandhour',timeoftravel='$date' WHERE username = '$username' AND timeoftravel='NULL' AND peak='NULL' AND rush='NULL' AND traffic='NULL' AND weather='NULL' AND demand='NULL';
EOF;
    $ret = pg_query($db, $sql);
   if(!$ret){
echo"<script>alert('Info not shared')</script>";
   } else 
   {
echo"<script>alert('Thanks for sharing your fare info')</script>"; 
echo "<script>window.location.replace('fare.php')</script> ";

  }
   pg_close($db); 
 }}
?>