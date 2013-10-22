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

<table>
	<?php foreach ($contestants as $name => $winner_or_loser): ?>
		<tr>
			<td><?=$name?></td><td><?=$winner_or_loser?></td>
		</tr>
	<?php endforeach; ?>
</table>



<?php
for ($i=0; $i < count($contestants); $i++) { 
	echo $contestants[$i]."<br>";
}
?>

</body>
</html>