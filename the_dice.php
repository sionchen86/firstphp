<?php include 'header.php'; ?>
<div id=titlebanner>
<h2>The Dice</h2>
</div>
<div class=textblock>
<p>The following is a simple dice throwing program demonstrating the use of if/else and a do/while loop. A do/while loop checks the condition after each iteration, therefore it will execute at least once. If the result is one throw, the program will use singular words in the results message.</p>
<?php
//using do/while, condition is checked last.
do {
	$dice = rand(1,6);

	$dicerolls ++;
	if ($dice ==6){
		echo "<p>Congratulations! You threw a 6, you're so lucky! =D</p>";
	}
	else {
		echo "<p>You threw a $dice, please try again. :(</p>";
	}
	}
	while ($dice !=6);
	
	$verb = "were";
	$last = "throws";
		if ($dicerolls == 1){
			$verb = "was";
			$last = "throw";
			}
			echo "There $verb $dicerolls dice $last.";
?>
<p>
<a href="javascript:history.go(0)">Try again!</a><br>
</p>
</div>

<?php include 'footer.php'; ?>