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

		function familyNameYear($name,$year)
		{
			echo "$name was born in $year<br>";
		}

		familyNameYear("Hege","1975");
		familyNameYear("Stale","1978");
		familyNameYear("Kai Jim","1983");
	?>
</body>

</html>
