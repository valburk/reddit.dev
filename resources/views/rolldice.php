<?php

$rand = mt_rand (1, 6 );


if(!is_numeric($guess)){ 
	
	$message = "Sorry, $guess isn't a number!!";

}else{
	
	if($guess == $rand){
		$message = "WOO! You rolled a $rand and you guessed $guess! :D ";
	}else{
		$message = "Dang! You rolled a $rand, but you guessed $guess... so close! :(";
	}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Roll dem dice</title>
   <link href="https://fonts.googleapis.com/css?family=Aldrich|Bangers" rel="stylesheet">
<style>
body {
    background-color: #333232;
}

h1 {
    color: white;
    margin-left: 40px;
    font-family: 'Aldrich', sans-serif;
    font-size: 50px;
} 
</style>
</head>
<body style >
    <h1> <?= $message ?> </h1>
    
</body>
</html>