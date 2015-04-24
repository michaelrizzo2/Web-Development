<html>
<head>
	<title>OOP in PHP</title>
</head>

<body>
	<?php 

		include("class_lib.php");
		$michael=new person();
		$michael->set_name("Michael Rizzo");
		echo "Michaels full name is ". $michael->get_name();

	?>
</body>

</html>
