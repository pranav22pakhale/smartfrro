<!DOCTYPE>
<html>
<head>

</head>
<body>
	<h1>Form</h1>
	<?php
		session_start();
		echo $_SESSION["username"]." - ".$_SESSION["password"];
		
		
		session_unset();
		session_destroy();

	?>
</body>
</html>









