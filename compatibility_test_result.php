<?php include 'header.php'; ?>

<div id=titlebanner>
<h2>Compatibility Test - Result</h2>
</div>
<div class=textblock>
<p>The verdict</p>
<?php
$points1 = $_POST['question1'];
$points2 = $_POST['question2'];
$points3 = $_POST['question3'];

$sumpoints = $points1+$points2+$points3;

if($sumpoints >= 90){
	echo "Wow! You sound amazing! I think we could be great friends! =D";
}
elseif($sumpoints >= 55){
	echo "You sound okay. We should get along just fine. =)";
}
else{
	echo "Ehh... I don't like you. >:(";
}

?>

<br>
<a href="/compatibility_test.php">Try again?</a>
</div>
<?php include 'footer.php'; ?>