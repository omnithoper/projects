<?php
$likes = 'eating,drinking, the gym, nothing';
$likes = explode(',', $likes);
// coma is the separator you can change it
foreach ($likes as $key => $like) {
	echo '<a href="#">', $like, '</a><br />';}
?>