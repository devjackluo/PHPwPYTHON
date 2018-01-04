<?php

$python = "C:\Users\Jack\AppData\Local\Programs\Python\Python36\python.exe";
$cmd = $python . " get.py";
//echo $cmd;
exec($cmd, $output);

foreach($output as $row){
	echo $row . " <br>";
};

//var_dump($output);

?>

