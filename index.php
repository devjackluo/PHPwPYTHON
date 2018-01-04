






<?php

$page_title = "Home";
require "templates/header.php";


?>

<h1>AJAX? Wish it worked.</h1>
<form action='index.php' method='post' class='ajaxform'>
    <input type='text' name='txt' value='Test Text'>
    <input type='submit' value='submit'>
</form>

<div id='result'>Result comes here..</div>

<?php
// All form data is in $_POST

// Now perform actions on form data here and
// create an result array something like this
$arr = array( 'result' => 'This is my result' );
echo json_encode( $arr );
?>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php




$python = "python";
$cmd = $python . " get.py &";
//$cmd = $python . " get.py > /dev/null 2>/dev/null &";

exec($cmd, $output);

foreach($output as $row){
	echo $row . " <br>";
};

require "templates/footer.php";


?>
