<h1>#1: If-Else Statement
Use the if-else construct to print one of two statements to the browser, depending on whether the current month is August.
</h1>
<?php
echo "Today is " . date("Y/m/d") . "<br>";   //current date time
echo "Today is " . date("l");     //current date with passing argument day name 
$currMonth=date('F',time()); //current date with passing argument F denotes the cureent monthe and time(current time)
if ($currMonth == 'August'){ //IF current month is november then its shows Its really cost If not nov its show Peak of the heat
  echo "<p>It's Nov, so it's really Cold.</p>";
}else{                        
  echo "<p>Not Nov, so at least not in the peak of the heat.</p>";
}
 
?>