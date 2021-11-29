<h1>#4: Nested For Loops
  //Loop inside a loop is called a nested loop. In PHP allows using one loop inside another loop.

Using nested for loops, create a multiplication table for the numbers 1-7.
</h1>
<table align="center" border='1' width="100%">
<?php
// filename : multiplication_table.php
$num = 7; // total no =7
//so i need to create  multiplication table for the numbers 1-7. then by using for loop.
for($i = 1; $i <= 10; $i++)  //
{	
    // echo "$i";
	
	for($j =1; $j <= $num; $j++) //nested loop
	{
		$multiplication_table = ($i * $j);
		echo "<td>$j  x $i =  $multiplication_table </td>";
	}
	
	echo "<tr/>";
}
?>
</table>