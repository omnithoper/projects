<?php
$GLOBALS['levels'] = array(
	1 => array(
		'name' => 'Level 1',
		'desc'=> ' This is the first level'
		), 
	2 => array(
		'name' => 'Level 2',
		'desc' => ' You\'ve made it to level 2'
	),
	3 => array(
		'name' => 'Level 3',
		'desc' => ' The lase level',
		'point' => array(1 => 1000)
	) 
);
function level_data($level, $data){
	if (array_key_exists($level, $GLOBALS['levels']) === true){
		return $GLOBALS['levels'][$level][$data];
	} else {
		return false;
	}
}
echo '<pre>', print_r($GLOBALS, true), '</pre>'; 
/*
echo level_data(1, 'desc');
echo '<pre>', print_r($GLOBALS['levels'], true), '</pre>'; 

$levels[4]=array(
	'name' => 'Level 4',
	'desc' => 'You\'ve entered a bonus level'
);
$levels[5]['name'] = 'Level 5';
echo $levels[3]['point'][1];

*/
?>
	


