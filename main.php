<?php
	
	$leeftijd = 65;

	if ($leeftijd < 3) {
		echo "0 euro";
	} else if ($leeftijd <= 12) {
		echo "5 euro";
	} else if ($leeftijd > 65) {
		echo "5 euro";
	} else {
		echo "10 euro";
	}

    echo "<br>leeftijd: ".$leeftijd;
