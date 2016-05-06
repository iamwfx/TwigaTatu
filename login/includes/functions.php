<?php
ob_start();
session_start();
class Users {
	public $tableName = 'users';
	
	function checkUser($oauth_provider,$oauth_uid,$username,$fname,$lname,$locale,$oauth_token,$oauth_secret,$profile_image_url){
		   $host        = "host=cscnairobi.cftukzuad7zw.us-east-1.rds.amazonaws.com";
   $port        = "port=5432";
   $conname      = "dbname=faredata";
   $credentials = "user=twigatatu password=twigatatu";

   $con = pg_connect( "$host $port $conname $credentials"  );
   if(!$con){
      echo "Error : Unable to open database\n";
   } 
   else{
   	$space=" ";
$name="$fname$space$lname";
$_SESSION['username']=$name;
		$prevQuery1=<<<EOF
			SELECT * FROM users WHERE oauth_provider = '$oauth_provider' AND oauth_uid = '$oauth_uid' ;
EOF;
		$prevQuery = pg_query($con,$prevQuery1);
		if(pg_num_rows($prevQuery) > 0){
$update1=<<<EOF
	UPDATE users SET oauth_token = '$oauth_token', oauth_secret = '$oauth_secret', modified = 'date("Y-m-d H:i:s")' WHERE oauth_provider = '$oauth_provider' AND oauth_uid = '$oauth_uid';
EOF;
			$update = pg_query($con,$update1);
				}
				else{
					$insert1=<<<EOF
	INSERT INTO users (oauth_provider,oauth_uid,username,fname,lname,name,locale,oauth_token,oauth_secret,picture) VALUES('$oauth_provider','$oauth_uid','$username','$fname','$lname','$name','$locale','$oauth_token','$oauth_secret','$profile_image_url');
EOF;
			$insert = pg_query($con,$insert1);
}
		
		$query1=<<<EOF
				SELECT * FROM users WHERE oauth_provider = '$oauth_provider' AND oauth_uid = '$oauth_uid';

EOF;
		$query = pg_query($con,$query1);
		$result = pg_fetch_array($query);
		return $result;
	}}
}
?>