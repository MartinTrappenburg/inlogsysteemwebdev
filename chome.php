chome
<?php
	#code hier
    session_id();
    session_unset();
    echo "My userrole is : " . $_SESSION["userrole"];
?>