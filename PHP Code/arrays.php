<html>
<head>
	<title>Arrays in PHP</title>
</head>

<body>
	<?php 
		//This will show how to get the length of the array
		$my_array=array(1,32,4,5);
		echo count($my_array);
		echo "<br>";
		//This will show how to iterate through an index based array
		$my_array=array(1,32,4,5);
		for ($x=0;$x<count($my_array);$x++)
		{
			echo "The array entry is $my_array[$x] <br>";
		}

	?>
</body>

</html>
