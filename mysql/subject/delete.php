<?php
require  '\..\..\crud\connect-db.php';
require  '\..\..\class\subject\crud class.php';

$deleteObject = new Subject();
$delete = $deleteObject->getDeleteSubject();
?>