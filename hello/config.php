<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'anthony');
   define('DB_PASSWORD', 'password');
   define('DB_DATABASE', 'student_subjects');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>