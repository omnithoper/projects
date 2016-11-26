<?php
$employees = [
	[
		'id' => 123,
		'name' => 'cesar',
		'dept_id' => 1,
	],
	[
		'id' => 234,
		'name' => 'anthony',
		'dept_id' => 2,
	],
	[
		'id' => 345,
		'name' => 'yoly',
		'dept_id' => 2,
	],
];

$departments = [
	['dept_id' => 1, 'department' => 'hr'],
	['dept_id' => 2, 'department' => 'clerk'],
	['dept_id' => 3, 'department' => 'marketing'],
];

foreach ($employees as $employee) {
    echo 'name: '.$employee['name'].', job: ';
	foreach ($departments as $department) {
		if ($department['dept_id'] == $employee['dept_id']) {
			echo $department['department'];
		}
	}
	echo '<br />';
}


/*
Adress Book
- 2 arrays:
-- 10 users
-- 3 city (address, phone)
- display as a table
- extra: there's an input box where you can search for a particular user, then display adress and phone number for that user
*/
?>