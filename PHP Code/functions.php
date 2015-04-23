<html>
<head>
	<title>Functions in PHP</title>
</head>

<body>
	<?php 
		function writemessage()
		{
			echo "Hello world!";
		}

		function familyName($name)
		{
			echo "Name is $name<br>";
		}

		writemessage();
		$name_array=array("Jani","Hege","Stale","Kai Jim","Borge");
		foreach ($name_array as $name_entry)
		{
			familyName($name_entry);
		}
	?>
</body>

</html>
