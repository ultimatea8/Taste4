<?php 
include 'configure.php';
include 'connect.php';
include 'dbFunc.php';

header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo '<response>';

	if (isset($_GET['NameInput'])){
        $userInput = $_GET['NameInput'];
    }
        
// choose then pull down the database you want.
    $pull = "t4"; dbPull($pull);
// select everything from the database table.
    $dbItems = Qquery("SELECT * FROM `picks`");

// spread out the table from the db
//	$ARay = QfetchArray($dbItems);
$daata = array();
while ($ARay = QfetchArray($dbItems)) {
array_push($daata, $ARay['Name']);
}

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
	if(in_array($userInput,$daata)){
		echo 'We\'ve found: '.$userInput;
	}elseif ($userInput=='') {
		echo 'Awaiting input.';
	}else{
		echo 'Nothing available by that Name';
	}
echo '</response>';
?>