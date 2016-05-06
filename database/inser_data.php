<?php
ob_start();
session_start();
include("connection.php");
if(isset($_POST['csc'])){
parse_str($_POST['csc'],$arr);
if(isset($arr['country']) && $arr['country']!=''){
if(isset($arr['state']) && $arr['state']!=''){
if(isset($arr['city']) && $arr['city']!=''){
$fare=$arr['fareamount'];
$city =$arr['city'];
$state =$arr['state'];
$country =$arr['country'];
$username=$_SESSION['names'];
//$value=$obj->get_country($arr['city'],$db);
$sql = <<<EOF
INSERT INTO "fareData" (username,stopid,startid,routeid,timeoftravel,peak,rush,traffic,weather,demand,fareamount)
      VALUES ('$username','$city', '$state', '$country','NULL','NULL','NULL','NULL','NULL','NULL',$fare );
EOF;
$ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
   } else {
      echo "Records created successfully\n";
   }
   pg_close($db);    
}
else{
echo "Choose Your Destination";
exit();
}}
else{
echo "Choose Your Journey Start";
exit();
}}
else{
echo "Choose Your Route";
exit();
}
}

class casCade{

 
function get_country($arr,$db){

$sql =  <<<EOF
SELECT stops_withroutes.stop_name , allbus_routes.rte_name,routecombos.start_name FROM routecombos INNER JOIN stops_withroutes ON stops_withroutes.stop_id = routecombos.end_id INNER JOIN allbus_routes ON allbus_routes.rte_id = stops_withroutes.route_id where routecombos.start_id='$arr'
EOF;
$data='';
     if ($result = $db->query($sql)) { 

         while($obj = $result->fetch_object()){ 
              $data .= $obj->stop_name; 
            $data .=$obj->start_name; 
         } 
   } 
print_r($data);
}
}
