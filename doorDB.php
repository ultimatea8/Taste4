<?php 
include 'configure.php';
include 'connect.php';

header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo '<response>';

	$userInput = $_GET['daInput'];

// choose then pull down the database you want.
    $pull = "t4"; dbPull($pull);
// select everything from the database table.
    $dbItems = 'SELECT Name FROM picks';

// spread out the table from the db
	$Array = QfetchArray($dbItems);

/*/	while ($row = $Array)  {
			$da= explode('-', $row['date']);
			$daa= $da[1]."-".$da[2]."-".$da[0];
		echo '
		<tr>
			<td>'.$daa.'</td>
			<td>'.$row['usir'].'</td>
			<td style="width: 300px">'.$row['msg'].'</td>
		</tr>
		';
	}
*/	
	if(in_array($userInput,$Array)){
		echo 'Got THAT ! '.$userInput;
	}elseif ($userInput=='') {
		echo 'You aint put anything yet.';
	}else{
		echo 'We dont got that...';
	}
echo '</response>';
?>