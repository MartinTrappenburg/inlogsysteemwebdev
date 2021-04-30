<?php
	define("SERVERNAME", "localhost");
	define("USERNAME", "adminlogin");
    define("PASSWORD", "IhTf8tQviQyty90w");
    define("DBNAME", "inlogsysteemmusic");
    
    
	$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

	if (!$conn ) {
		die("connection_failed".mysqli_connect_error());
	}
	//echo "connection succesful!";
?>