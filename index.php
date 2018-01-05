

<?php

$page_title = "Home";
require "templates/header.php";


$python = "python";
$cmd = $python . " get.py &";
//$cmd = $python . " get.py > /dev/null 2>/dev/null &";

exec($cmd, $output);

foreach($output as $row){
	echo $row . " <br>";
};

require "templates/footer.php";


?>
