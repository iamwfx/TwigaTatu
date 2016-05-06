<?php
class Cl_DBclass
{
	/**
	 * @var $con will hold database connection
	 */
	public $con;
	
	/**
	 * This will create Database connection
	 */
	public function __construct()
	 {
   $host        = "host=cscnairobi.cftukzuad7zw.us-east-1.rds.amazonaws.com";
   $port        = "port=5432";
   $conname      = "dbname=faredata";
   $credentials = "user=twigatatu password=twigatatu";

   $this->con = pg_connect( "$host $port $conname $credentials"  );
   if(!$this->con){
      echo "Error : Unable to open database\n";
   } 
	 }
}