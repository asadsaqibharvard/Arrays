<?php

/*
echo "<pre>";
echo print_r($_POST);
echo "</pre>";



$contestants['Sam'] = '';
$contestants['Asad'] = '';
$contestants['John'] = '';
$contestants['Lance'] = '';

*/

$winning_number = rand(0,4);

foreach ($_POST as $field_name => $contestant_name) {

	$contestants_random_number = rand(0,4);

	//Winner
	if ($winning_number == $contestants_random_number) {
		$contestants[$contestant_name] = 'Winner';
	}
	//Loser
	else{
		$contestants[$contestant_name] = 'Loser';
	}
}

?>