<html>
	<body>
		<table style="border: 1px solid black; border collapse; width: 100;">
			<?php

			   for ($x = 1; $x <= 10; $x++) {
			   	echo '<tr>';

				for ($y = 1; $y <= 10; $y++) {
			     
				echo '<td style="border: 1px solid black;">'.$y * $x. '</td>';
				}   
				echo ' </tr> ';
			  }

			 ?>
		</table>
 </body>
</html>
 