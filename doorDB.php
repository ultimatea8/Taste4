<?php 
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo '<response>';

	$userInput = $_GET['daInput'];

// choose then pull down the database you want.
    $pull = "t4; dbPull($pull);
// select everything from the database table.
    $dbItems = 'SELECT * FROM playevents';

// spread out the table from the db
	$Array = QfetchArray();

//array('tuna', 'bacon', 'loaf', 'lamb', 'fruits');
	
	if(in_array($userInput,$Array)){
		echo 'Got THAT ! '.$userInput;
	}elseif ($userInput=='') {
		echo 'You aint put anything yet.';
	}else{
		echo 'We dont got that...';
	}
	
echo '</response>';
?>