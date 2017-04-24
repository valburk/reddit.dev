<?php

$rand = mt_rand (1, 6 );
 
if($guess == $rand){
	$message = "WOO! You rolled a $rand and you guessed $guess!";
}else{
	$message = "Dang! You rolled a $rand, you guessed $guess... so close!";


}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Roll dem dice</title>
</head>
<body>
    <h1> <?= $message ?> </h1>
</body>
</html>