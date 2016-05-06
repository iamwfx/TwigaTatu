<?php
   $host        = "host=cscnairobi.cftukzuad7zw.us-east-1.rds.amazonaws.com";
   $port        = "port=5432";
   $dbname      = "dbname=faredata";
   $credentials = "user=twigatatu password=twigatatu";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } 
   
?>