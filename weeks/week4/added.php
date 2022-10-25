<form method="POST" action=""> <!--Set the form tag first and the method "POST". -->
    <label for="">Enter the first number:</label><!--Add a start tag for the label-->
    <input type="number" name="num1"><br><!--Change type to number and name to all lowercase.-->

    <label for="">Enter the second number:</label><!--Label tags at the beginning and end-->
    <input type="number" name="num2"><br><!--Change type to number-->

    <input type="submit" value="Add Em!!"><!--Add "-->

</form>

<?php     //adder-wrong.php

if (isset($_POST['num1'], $_POST['num2'])){ // Add $_POST['num2'].
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$myTotal = $num1 + $Num2;   //There is no need for the - symbol.

echo '<h2>You added '. $num1 .' and '.$num2; //Change " to ' and correct.
echo '<p> and the answer is <br>
<li style="color:red;">'. $myTotal .'!</li></p>'; //Change " to ' and correct. ! Change before and after ' to '.
echo'<p><a href="">Reset page</a>'; //Add the ;.
}


