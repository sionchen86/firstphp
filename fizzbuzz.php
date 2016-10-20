<?php include 'header.php'; ?>
<div id=titlebanner>
<h2>FizzBuzz</h2>
</div>
<div class=textblock>

The FizzBuzz problem. 
<ul>
<li>For multiples of 3, print "Fizz" instead of the number</li>
<li>For multiples of 5, print "Buzz" instead of the number</li>
<li>For multiples of 3 and 5, print "FizzBuzz" instead of the number</li>
</ul>

Result:</br>
<?php

for ($i=1;$i <= 100;$i ++) {
	if ($i % 3 == 0) {
		if ($i % 5 == 0) {
			echo "FizzBuzz ";
		}
		else {
			echo "Fizz ";
		}
	}
	elseif ($i % 5 == 0) {
				echo "Buzz ";
	}
	else {
			echo "$i ";
	}
}

?>

</div>
<?php include 'footer.php'; ?>