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
		//Step 15 using public,private, and protected to modify acces to instance variables
		public $height;
		protected $social_insurance;
		private $pinn_number;

		//Step 13 setting up constructor
		function __construct($new_name,$new_number)
		{
			$this->name=$new_name;
			$this->pinn_number=$new_number;

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

		public function get_pinn_number()
		{
			return $this->$pinn_number;	
		}

	}
	?>
</body>

</html>
