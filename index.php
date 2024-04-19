<?php

/*----------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 * Licensed under the MIT License. See LICENSE in the project root for license information.
 *---------------------------------------------------------------------------------------*/

function sayHello($name) {
	echo "Hello $name!";
}

?>

<html>
	<head>
		<title>Visual Studio Code Remote :: PHP</title>
	</head>
	<body>
		<?php 
		
		define("PI",3.14);
		$r=10;
		$s=PI*pow($r,2);
		$p=2*PI*$r;
			echo "$p </br>";
			echo $s;
			//ok
			
			$n = 100;
							$arr1 = array($n);
							$arr2 = array(1,2,3,4);
							$arr3 = array();
							$arr4 = array("hoten" => "Trần Linh Nhi",
										"quequan" => "Ha Nội",
										"tuoi" => 22			
							);
							print_r($n);
							print_r($arr1);
							print_r($arr2);
							print_r($arr3);
							print_r($arr4);
		
		for($i=1;$i<=200;$i++){
			if($i%2==0)
				echo "<b><font color=red>".$i."</font></b>";
		else
				echo "<i><font color=blue>".$i."</font></i>";
		}
		?>
	</body>
</html>