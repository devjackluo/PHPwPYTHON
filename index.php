<?php

$page_title = "Home";
require "templates/header.php";


$python = "python";
$cmd = $python . " get.py";
//echo $cmd;
exec($cmd, $output);

foreach($output as $row){
	echo $row . " <br>";
};


require "templates/footer.php";

?>
