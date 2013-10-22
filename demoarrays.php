<!DOCTYPE html>
<html>
<head>

	<?php
	require_once('logic.php');
	?>

	<link rel='stylesheet' href='style.css' type='text/css'>

</head>

<body>

<pre>
<?php
print_r($contestants); 
?>
</pre>

Asad is a <?=$contestants['Asad']?>
	

</body>
</html>