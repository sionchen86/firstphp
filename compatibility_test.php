<?php include 'header.php'; ?>

<div id=titlebanner>
<h2>Compatibility Test</h2>
</div>
<div class=textblock>
<p>This is a compatibility test. Answer the following questions and see how well you and I would get along. :)</p>

Do you like kimchi?
<form action="compatibility_test_result.php" method="post">
  <input type="radio" name="question1" value="34" required> YASSSSS!<br>
  <input type="radio" name="question1" value="25"> It's okay.<br>
  <input type="radio" name="question1" value="-15"> Eww no.<br>


Do you like kpop?

  <input type="radio" name="question2" value="33" required> YASSSSS!<br>
  <input type="radio" name="question2" value="25"> It's okay.<br>
  <input type="radio" name="question2" value="-15"> Eww no.<br>


Do you like bunnies?

  <input type="radio" name="question3" value="33" required> YASSSSS!<br>
  <input type="radio" name="question3" value="25"> They're okay.<br>
  <input type="radio" name="question3" value="-15"> Eww no.<br>
  <input type="submit" value="See how well you scored!">
</form>

</div>
<?php include 'footer.php'; ?>