<html>
<head>
	<title>OOP in PHP</title>
</head>

<body>
	<?php 
		//Step 7 include class code 
		include("class_lib.php");
		//step 8,9 set up class and show use of new keyword
		//$michael=new person();
		//Step 10 set an objects properties
		//$michael->set_name("Michael Rizzo");
		//Step 14 create object with constructor
		$michael=new person("Michael Rizzo",646916);
		//Step 11 Accessing an objects Data
		echo "Michael's full name is ". $michael->get_name();
		echo "Michael's pinn number is ". $michael->get_pinn_number();
		//Step 18,19,20 created constructor which links to parent class constructor,and using methods from base class
		$employee=new employee("Robert Rizzo",566166);
		echo $employee->get_name();
	?>
</body>

</html>
