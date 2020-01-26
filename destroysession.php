<?php
	session_start();
	session_destroy();
	echo '<script type="text/javascript">
					alert("Successfully Logged out!");
					window.location = "http://localhost/Hospital%20Website/Hospital.php"
					</script>';
?>