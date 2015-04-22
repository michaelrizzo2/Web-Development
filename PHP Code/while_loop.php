<html>
<head><title>While loop php</title></head>
<body>
	<?php
		$counter=1;
		//This will define a max constant
		define('Max',10);
		while ($counter<=Max)
		{
			echo "The current value of the counter is $counter";
			$counter++;
		}
	?>
</body>


</html>
