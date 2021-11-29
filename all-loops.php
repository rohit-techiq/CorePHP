<h1>#1: If-Else Statement
Use the if-else construct to print one of two statements to the browser, depending on whether the current month is August.
</h1>
<?php
echo "Today is " . date("Y/m/d") . "<br>";  
echo "Today is " . date("l");
$currMonth=date(' ',time());
if ($currMonth == 'November'){
  echo "<p>It's Nov, so it's really Cold.</p>";
}else{
  echo "<p>Not Nov, so at least not in the peak of the heat.</p>";
}
 
?>

<h1>#3: Simple For Loop
Send a list of formulas to the browser, the squares of the numbers from 1-12, using a for loop
</h1>
    <?php
for($count=1; $count<=12;$count++){
    $square=$count*$count;
    print($square);
    echo "<br>";
}

?>

<h1>#4: Nested For Loops
Using nested for loops, create a multiplication table for the numbers 1-7.
</h1>
<table align="center" border='1' width="100%">
<?php
// filename : multiplication_table.php
$num = 7;

for($i = 1; $i <= 10; $i++)
{	
    // echo "<tr>";
	
	for($j =1; $j <= $num; $j++)
	{
		$multiplication_table = ($i * $j);
		echo "<td>$j  x $i =  $multiplication_table </td>";
	}
	
	echo "<tr/>";
}
?>
</table>


