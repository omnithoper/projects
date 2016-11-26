<?php
class forbutton {
	
	function button() {
		$output = '';
		
		$current = 0;
		for ($x = 1; $x <= 3; $x++) {
		
			for ($y = 1+$current; $y <= 3+$current; $y++) {
				$output = $output . "<button type ='submit'> ".($y)."</button>" ; 
			}
			$current = $y - 1;
		
			$output = $output . " <br />";
		}
		
		return $output;
	}
}

?>
