<html>
	<head>
		<title>Array Functions</title>
	</head>
	<body>
		<?php $array1=array(5,9,13,15,18,45,34,26); ?>
		Count: <?php echo count($array1); ?><br/>
		Maximum: <?php echo max($array1); ?><br/>
		Minimum: <?php echo min($array1); ?><br/>
		Sort: <?php sort($array1); print_r($array1); ?><br/>
		Reverse Sort: <?php rsort($array1); print_r($array1); ?><br/>
		Implod: <?php echo $string1 = implode(" * ",$array1); ?> <br/>
		Explode: <?php print_r(explode(" * ", $string1)); ?> <br/>
		In Array: <?php echo in_array(15, $array1); //To check if any number exist in array or not it will reply in true or false. ?>
 	</body>
</html>
