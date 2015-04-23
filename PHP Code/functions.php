<html>
<head>
	<title>Functions in PHP</title>
</head>

<body>
	<?php 
		//Function with no parameter
		function writemessage()
		{
			echo "Hello world!";
		}

		writemessage();
		
		//Function with one parameter, an array and a foreach loop
		function familyName($name)
		{
			echo "Name is $name<br>";
		}

		$name_array=array("Jani","Hege","Stale","Kai Jim","Borge");
		foreach ($name_array as $name_entry)
		{
			familyName($name_entry);
		}

		//Function with two parameters
		function familyNameYear($name,$year)
		{
			echo "$name was born in $year<br>";
		}

		familyNameYear("Hege","1975");
		familyNameYear("Stale","1978");
		familyNameYear("Kai Jim","1983");

		//Function with an default arguement
		function setHeight($height=50)
		{
			echo "The height is $height<br>";
		}
		setHeight(350);
		setHeight();//This will use the default value of 50
		setHeight(135);
		setHeight(80);
		//Function with a return statement
		function sum($x,$y)
		{
			$z=$x+$y;
			return $z;	
		}

		echo "5+10 is ".sum(5,10);

	?>
</body>

</html>
