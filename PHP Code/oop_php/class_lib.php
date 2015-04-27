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
		//Step 21 protected function which will be accessed by child class
		protected function set_name($new_name)
		{
			if ($this->name !="Jimmy Two Guns")
			{
				$this->name=strtoupper($new_name);	
			}
			//$this->name=$new_name;
		}

		function get_name()
		{
			return $this->name;	
		}

		//Step 17 Restricting access to methods
		public function get_pinn_number()
		{
			return $this->pinn_number;	
		}

	}
	//Step 18 and 19 setting up child class to inherit properties and constructors for base class
	class employee extends person
	{
		function __construct($new_name,$new_number)	
		{
			person::__construct($new_name,$new_number);
		}
	
	}

	//Step 21 Overriding method from parent class
	protected function set_name($new_name)
	{
		if(name=="Stefan Lamp")
		{
			$this->name=$new_name;
		}	

		else if (name=="Johnny Fingers")
		{
			person::set_name($new_name);
		}
	}
	?>
</body>

</html>
