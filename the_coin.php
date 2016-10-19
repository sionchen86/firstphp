<?php include 'header.php'; ?>
<div id=titlebanner>
<h2>The Coin</h2>
</div>
<div class=textblock>
<p>This program demonstrates a simple while loop. It will keep trying to flip a coin until it achieves three consecutive heads. Additionally, it will announce how many flips it took.</p>
<?php
$headcount = 0;
$flipcount = 0;
// Condition is checked from start
while ($headcount < 3) {
	$flip = rand(0,1);
	$flipcount ++;
	if ($flip) {
		$headcount ++;
		echo "Heads! ";
	}
	else {
		$headcount = 0;
		echo "Tails! ";
	}
}
echo "<p>It took $flipcount flips!</p>";

?>
<p>
<a href="javascript:history.go(0)">Try again!</a><br>
</p>
</div>
<?php include 'footer.php'; ?>