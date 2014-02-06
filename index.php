<?php
// Location of application folder:
$applicationDirectory = 'Application/';

// Location of Classes Folder
$classesDirectory = $applicationDirectory . 'Classes/';

// Autoload function:
function __autoload($class_name) {
    include $classesDirectory . $class_name . 'php';
}
?>
<html>
<head><title>Check Registrar</title></head>
<body>
<h1>Check Registrar 2</h1>
</body>