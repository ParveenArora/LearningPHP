<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>
		<?php $array1 = array(4,8,15,20,26,41); ?>
		<?php echo $array1[1]; //One Dimensional Array?> 
		<br/>
		
		<?php $array2 = array(4,8,"box","dog", array("x","y", "z")); ?>
		<?php echo $array2[2]; ?>
		<?php echo $array2[4][1]; //Two Dimensional Array 
		$array2[4][1]="<br/>Rat<br/>";
		echo $array2[4][1];
		?>
		<pre><?php echo print_r($array1); ?>
		<?php echo print_r($array2); ?>
		</pre>
		
		<br/>
		
		<?php $array3 = array("first_name" => "Parveen", "last_name" => "Arora");//first name is the key and Parveen is the Value.
		echo $array3["first_name"] . " " . $array3["last_name"]; //Here we asked about key to fetch the value instead of the position
		echo "<br/>";
		$array3["last_name"] = "Kumar Arora";
		echo $array3["first_name"] . " " . $array3["last_name"];
		?>
		<pre><?php echo print_r($array3); ?></pre>
	</body>
</html>
