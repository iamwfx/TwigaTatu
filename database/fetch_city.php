<?php

include("connection.php");
$end_id = trim($_POST["end_id"]);
 
$sql = <<<EOF
SELECT * FROM routecombos WHERE end_id = '$end_id' ORDER BY start_name;
EOF;
$query = pg_query($db, $sql);
       ?><label>Destination:</lable><br>
<select name="city" name="box">
	<option value="">Please Select</option>
	
 <?php while($rs = pg_fetch_array($query)){ 
              echo"<option value=".$rs['start_id']."> ".$rs['start_name']." </option>
              ";
            } ?>

</select>
<?php 
	

?>