

<h1>#2: Simple Loops
Create several nonsense outputs to practice using do...while, for, and while loops.
</h1>
<h2>While loop</h2>
<p>The while loop - Loops through a block of code as long as the specified condition is true.</p>
<!-- <pre>
while (condition is true) {
  code to be executed;
} -->
</pre>
<?php
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
?>

<?php
$x=0;
while($x<=100){
  echo"$x <br>";
  $x+=10;
}
?>

<h2>Do-While loop</h2>
<p>The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.</p>
<!-- do {
  code to be executed;
} while (condition is true); -->
<?php
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>

<?php
$x = 0;

do {
  echo "The number is: $x <br>";
  $x+=10;
} while ($x <= 100);
?>

<h2>For loops</h1>
<p>The for loop - Loops through a block of code a specified number of times.</p>
<!-- for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
} -->
<?php

for ($x = 0; $x <= 10; $x++){
echo"$x <br>";
}
?>
<?php
for( $x=5; $x>=1; $x-- )
 
{
 
echo $x."<br>";
 
}
?>

<h1>#3: Simple For Loop
Send a list of formulas to the browser, the squares of the numbers from 1-12, using a for loop
</h1>
    <?php
  //First I need a squre of numbers of 1 to 12. so I hae used for loop for this....$cout=1,$count<=12,Count++ 
for($count=1; $count<=12;$count++){ //count=1 and count++ means 2, then loop os running so first count is 2.
    $square=$count*$count;  //square=count*count so first count is 2 then first ountput is 2 and loops is running lesstehn equls to 12 so secont output is 2*2=4......12*12=144.
    print($square);
    echo "<br>";
}
?>

<h2>For-each Loop</h1>
<p>The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.</p>
<!-- foreach ($array as $value) {
  code to be executed;
} -->

<?php

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}


?>

