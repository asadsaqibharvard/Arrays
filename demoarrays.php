<!DOCTYPE html>
<html>
<head>

	<?php
	require_once('logic.php');
	?>

	<link rel='stylesheet' href='style.css' type='text/css'>

</head>

<body>

	
<?php
foreach ($contestants as $name => $winner_or_loser) {
	echo $name." is ".$winner_or_loser."<br>";
}
?>

</body>
</html>