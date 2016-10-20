<?php include 'header.php'; ?>
<div id=titlebanner>
<h2>FizzBuzz</h2>
</div>
<div class=textblock>
<p>
The FizzBuzz problem. 
<ul>
<li>For multiples of 3, print "Fizz" instead of the number</li>
<li>For multiples of 5, print "Buzz" instead of the number</li>
<li>For multiples of 3 and 5, print "FizzBuzz" instead of the number</li>
</ul>
</p>

<p>Result:</p>
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
</br>
<p>Here's the code:</p>

<script src="https://gist.github.com/sionchen86/2c51b0226eb6b2bad5057503cbcbb7c7.js"></script>
</div>
<?php include 'footer.php'; ?>