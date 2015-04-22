<html>
<head><title>Operators in php</title></head>
<body>
<?php   
	$x=10;
	$y=20;
	echo $x+$y."<br/>";
	echo $x-$y."<br/>";
	echo $x*$y."<br/>";

	//division operator demo
	$z=$x/$y;
		echo gettype($z)."<br/>";

	$z=$y/$x;
		echo gettype($z)."<br/>";
	//modulus demo
	$mod=$y % $x;
	echo gettype($mod)."<br/>".(string)$mod;

?>
</body>



</html>
