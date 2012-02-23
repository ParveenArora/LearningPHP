<html>
	<head>
		<title>Type Casting</title>
	</head>
	<body>
		<?php
			$var1 = "3 brown foxes";
			$var2 = $var1 + 2;
			echo $var2;
		?><br/>
		<?php
		echo gettype($var1);
		echo "<br />";
		echo gettype($var2);
		settype($var2,"string");
		echo gettype($var2); echo "<br/>";
		$var3 = (int) $var1;echo "<br />";
		echo gettype($var3); 
		?>
		
		<?php // You can also perform tests on the type (which return booleans) ?>
		is_array: <?php echo is_array($var1);		// result: false ?><br />
		is_bool: <?php echo is_bool($var1);			// result: false ?><br />
		is_float: <?php echo is_float($var1);		// result: false ?><br />
		is_int: <?php echo is_int($var1);			// result: false ?><br />
		is_null: <?php echo is_null($var1);			// result: false ?><br />
		is_numeric: <?php echo is_numeric($var1);	// result: false ?><br />
		is_string: <?php echo is_string($var1);		// result: true ?><br />
 	</body>
</html>
