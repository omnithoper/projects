<?php
$data = array(
 '0' => array('Bakken', 'Stig', '', 'stig@example.com'),
 '1' => array('Merz', 'Alexander', 'alex.example.com', 'alex@example.com'),
 '2' => array('Daniel', 'Adam', '', '')
);
?>
<?php
require_once 'HTML/Table.php';

$attrs = array('width' => '600');
$table = new HTML_Table($attrs);
$table->setAutoGrow(true);
$table->setAutoFill('n/a');
?>