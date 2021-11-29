<h1>#4: Function for HTML
Write an array of months and their corresponding number of days, with a function to create option elements for a select field.
</h1>
<?php
//Create array.
$months=array(
  'January'=>31,
  'February'=>'28 days, if leap year 29',
  'March'=>31,
  'April'=>30,
  'May'=>31,
  'June'=>30,
  'July'=>31,
  'August'=>31,
  'September'=>30,
  'October'=>31,
  'November'=>30,
  'December'=>31
);
function option($str){
    echo "<option value=\"$str\"> $str</option>\n";
  }
   

 ?>
<?php
//If form not submitted, show form.
if(!isset ($_POST['submit'])){
?>

<form method="post" action="/php-exercises/CorePHP/Funtions/arrayofmonth.php">
<p>Please choose a month.</p>
<select name="month">
<?php
//Create options using the array and the function.
  foreach ($months as $k => $v){  //months name is denoted as $k kye as value
    option($k); //key output
  }
?>
</select>  
<p />
<input type="submit" name="submit" value="Go" />
</form>

<?php
//If form submitted, respond to user.
}
else {
//Retrieve user input.
  $month = $_POST['month'];
//Allow for February using a conditional statement.  
  if ($month == 'February'){
    echo "The month of February has " . $months['February'] . ".";
  }else{
    echo "The month of $month has $months[$month] days.";
  }
}
?>