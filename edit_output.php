<?php
$code = $_GET['html_code'];
$filename = 'output.php';
$writeToFile = file_put_contents($filename, "<?php ".$code." ?>");
echo $writeToFile;
?>