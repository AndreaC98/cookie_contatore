<html>
	<head>
		<h1>contatore accessi</h1>
	</head>
	<body>
		<?php
			$file = ("contatore.txt");
		   $visite = file($file);
		   $visite[0]++;
		   $fp = fopen($file , "w");
		   fputs($fp , "$visite[0]");
		   fclose($fp);
		   echo $visite[0];
		?>
	</body>
</html>