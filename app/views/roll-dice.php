<?php

define('SIDES_OF_DICE', 6);

$roll = mt_rand(1, SIDES_OF_DICE);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rolldice</title>
</head>
<body>
	<h1>Guess a number from 1 to 6!</h1>
	<h1>Your guess was -  <?php echo $guess; ?> !</h1>
    <h1>Your number is -  <?php echo $roll; ?>!</h1>
</body>
</html>