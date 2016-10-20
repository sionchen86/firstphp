<?php include 'header.php'; ?>

<div id=titlebanner>
<h2>Form 1</h2>
</div>
<div class=textblock>
<p>
<?php 

echo "Welcome " . $_POST['name'] . ", I see that you like " . $_POST['food'] . ", well so do I. :)"; 


?>
</p>



</div>

<?php include 'footer.php'; ?>