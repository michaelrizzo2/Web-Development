<html>
<head><title>For loop on Php</title></head>
<body>
<?php
//	for ($i=0;$i<5;$i++)
//	{
//		echo "i is $i"."<br/>";
//	}
//for (;;)
//{
//	$i=rand(1,5);
//		echo "$i" ."<br/>";
//
//	if($i==2)
//	{
//		echo "you have hit the number 2";
//		break;		
//	}
//}
//
?>	
<ul>
    <?php for ($i=1;$i<=5;$i++):?>
	<li>Menu item #<?php echo $i;?></li>
	<?php endfor;?>
</ul>
</body>

</html>
