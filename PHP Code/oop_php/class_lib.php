<html>
<head>
	<title>Class structure in PHP</title>
</head>

<body>
	<?php 
		class person
		{
			var $name;	

			function set_name($new_name)
			{
				$this->name=$new_name;
			}

			function get_name()
			{
				return $this->name;	
			}
		}
	?>
</body>

</html>
