<html>
<head>
	<title>OOP in PHP</title>
</head>

<body>
	<?php 
		//Step 2 This will set up the person class
	class person
	{
		//Step 3 This will add a data variable to our person class
		var $name;

		//Step 13 setting up constructor
		function __construct($new_name)
		{
			$this->name=$new_name;
		}
		//Step 4,5 and 6 getter and setter methods, and $this keyword for instance variables
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
