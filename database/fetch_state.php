<?php

include("connection.php");
$route_id = trim($_POST["route_id"]);?>
          <?php
$sql = <<<EOF
SELECT * FROM stops_withroutes WHERE route_id = '$route_id' ORDER BY stop_name;
EOF;

   $query = pg_query($db, $sql);
  

    ?>
            <label>Origin:</label><br>
            <select name="state" id = "drop2">
              <option value="">Please Select</option>
              <?php while($rs = pg_fetch_array($query)){ 
              echo"<option value=".$rs['stop_id']."> ".$rs['stop_name']." </option>
              ";
            } ?>
            </select>
          
  <script src="dist/js/jquery-1.9.0.min.js"></script>
<script>
$(document).ready(function(){

$("select#drop2").change(function(){

  var end_id =  $("select#drop2 option:selected").attr('value'); 
// alert(route_id); 
    if (end_id.length > 0 ) { 
    
   $.ajax({
      type: "POST",
      url: "database/fetch_city.php",
      data: "end_id="+end_id,
      cache: false,
      beforeSend: function () { 
        $('#city').html('<img src="dist/images/loader.gif" alt="" width="24" height="24">');
      },
      success: function(html) {    
        $("#city").html( html );
      }
    });
  } 
});
});
</script>