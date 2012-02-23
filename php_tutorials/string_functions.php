<html>
	<head>
		<title>Strings Functions</title>
	</head>
	<body>
	<?php
		$first_variable = "Guru nanak dev";
		$second_variable = " Engineering college, Ludhiana";
	?>
	<?php
		$third_variable = $first_variable;
		$third_variable .= $second_variable;
		echo $third_variable;
	?>
	<br/>
	Lowercase: <?php echo strtolower($third_variable); ?> <br/>
	Uppercase: <?php echo strtoupper($third_variable); ?> <br/>
	Uppercase first Letter: <?php echo ucfirst($third_variable); ?> <br/>
	Uppercase words: <?php echo ucwords($third_variable);?>
	<br/><br/>
	Length: <?php echo strlen($third_variable); ?><br/>
	Trim: <?php echo $fourth_variable = $first_variable . trim($second_variable); ?><br/>
	Find: <?php echo strstr($third_variable, "nanak");  ?><br/>
	Replace by a string: <?php echo str_replace("Ludhiana", "Chandigarh",$third_variable); ?><br/>	
	<br/><br/>
	Make Substring: <?php echo substr($third_variable,3,10); ?> <br/>
	Find Position: <?php echo strpos($third_variable,"nanak"); ?> <br/>
	Find Character: <?php echo strchr($third_variable, "E"); ?> <br/>
	Repeat: <?php echo str_repeat($third_variable, 2); ?>
	
	
	</body>
</html>
