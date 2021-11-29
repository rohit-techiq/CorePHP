<h1>#1: Simple Function
Create a function to print the classic "Hello World!" to the browser.
</h1>
<?php
//Define function.
function hello(){  //funtuon name
  echo "Hello, World!"; //return
}
 
//Call function.
hello(); //get output by calling function    
?>



<h1>#2: Arguments and Return Values
Create two versions of a function to calculate the area of a rectangle.
</h1>
<h2>Rectangle Area Function</h2>
<?php
//Define function.
function recArea($l, $w){ //i have passwd two arguments here because the are of rectangle is l*w then I have pased two argumets i.e. l and w
  $area = $l * $w;  //Area of rectangle
  echo "A rectangle of length $l and width $w has an area of $area.";
}
 
//Call function.
recArea(2, 4); 
?>
