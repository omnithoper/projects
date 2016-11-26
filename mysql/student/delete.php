<?php

require  '\..\..\class\student\crud class.php';
require  '\..\..\crud\connect-db.php';

$deleteObject = new Student();
$delete = $deleteObject->getDeleteStudent();
?>