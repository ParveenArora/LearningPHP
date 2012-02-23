<html>
	<head>
		<title>Numbers</title>
	</head>
	<body>
	<?php
		$var1 = 5;
		$var2 = 10;
	?>
	Basic Math: <?php echo ((2 + 3 + $var1) * $var2) / 2 - 5; ?> <br/>
	<br/>
	+=: <?php echo $var2 += 3; ?><br/>
	-=: <?php echo $var2 -= 3; ?><br/>
	*=: <?php echo $var2 *= 3; ?><br/>
	/=: <?php echo $var2 /= 5; ?><br/>
	<br/>
	PreIncrement: <?php echo ++$var2; ?><br/>
	PostIncrement: <?php echo $var2++; ?><br/>
	Increment: <?php echo $var2; ?><br/>
	
	
	PreDecrement: <?php echo --$var2; ?><br/>
	PostDecrement: <?php echo $var2++; ?><br/>
	Decrement: <?php echo $var2; ?><br/>
	
	</body>	
</html>
