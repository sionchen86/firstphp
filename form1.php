<?php include 'header.php'; ?>

<div id=titlebanner>
<h2>Form 1</h2>
</div>
<div class=textblock>
This is a simple form combining HTML input with PHP using POST method.
<form action="form1result.php" method="post">

		<label for="name">Name:</label>
		<input type="text" name="name" />

		<label for="food">Favourite food:</label>
		<input type="text" name="food" />
		</br>
<input type="submit">
</form>



</div>

<?php include 'footer.php'; ?>

// Something changed on the pc