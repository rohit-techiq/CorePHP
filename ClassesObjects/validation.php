<h1>#3: Modify Class and Validate Data
Improve the select field class and add required fields and data validation to your user registration form.
</h1>
<?php

$car=array(
    "Audi",
    "Range Rover",
    "Thar",
    "Safari",
    "Mini Cooper",
    "BMW" 
);

$speed=array(
    "350KMPh",
    "300KMPh",
    "180KMPH",
    "250KMPH",
    "280KMPH",
    "350KMPH" 
);

$variant=array(
    "Racing",
    "Xuv",
    "Offroading",
    "Xuv",
    "Hachback",
    "Racing" 
);

class Select
    {
        //Properties
        private $name;   //String variable.
        private $value;  //Array variable.
    
        //Methods
        //The string set by this method will be the name of the select field.
        public function setName($name){
        $this->name = $name;
        }
    
        public function getName(){
        return $this->name;
        }
    
        //This method provides the values used for the options
        //in the select field and checks to be sure the value is an array. 
        public function setValue($value){
        $this->value = $value;
        }
    
        public function getValue(){
        return $this->value;
        }
    
        //This method creates the actual select options. It is private, 
        //since there is no need for it outside the operations of the class.
        private function makeOptions($value){
        foreach($value as $v){
            echo "<option value=\"$v\">" .ucfirst($v). "</option>\n";
            }
        }
    
        //This method puts it all together to create the select field.
        public function makeSelect(){
        echo "<select name=\"" .$this->getName(). "\">\n";
        //Create options.
        $this->makeOptions($this->getValue());
        echo "</select>" ;
        }
  }//end class

  //If form not submitted, display form.
    if(!isset($_POST['submit'])){
    ?>

        <form method="post" action="/php-exercises/CorePHP/ClassesObjects/validation.php">
        <p>Name:<br />
        <input type="text" name="name" size="60" />  </p>
        <p>Username:<br />
        <input type="text" name="username" size="60" /></p>
        <p>Email:<br />
        <input type="text" name="email" size="60" /></p>
 
        <p><strong>Work Access</strong></p>
        <p>Car: 

    <?php
        //Instantiate object.
        $cars = new Select();
        //Set properties.
        $cars->setName('cars');
        $cars->setValue($car);
        //The object has the data it needs from the preceding commands.
        //Tell it to make the select field.
        $cars->makeSelect();
        //Destroy the object.
        unset($car);
 
        echo "</p>\n<p>Connection Speed: ";
        $c_speed = new Select();
        $c_speed->setName('carspeed');
        $c_speed->setValue($speed);
        $c_speed->makeSelect();
        unset($speed);
 
        echo "</p>\n<p>Operating System: ";
        $c_variant = new Select();
        $c_variant->setName('variants');
        $c_variant->setValue($variant);
        $c_variant->makeSelect();
        unset($variant);    
    ?>
        <input type="submit" name="submit" value="Go" />
        
        </form>

        <?php
        //If form submitted, process input.
        }else
        {
            //Could include code to send data to database here.
            //Retrieve user responses.
            $name=$_POST['name'];
            $username=$_POST['username'];
            $email=$_POST['email'];
            $Cars=$_POST['cars'];
            $speed=$_POST['carspeed'];
            $variant=$_POST['variants'];

             //Check input.
    if (empty($name)){
        die('Error: Please enter your name. <br />
        <input type="submit" name="back" value="Back to form" 
        onclick="self.location=\'/php-exercises/CorePHP/ClassesObjects/validation.php\'" /></body></html> ');
      }
      if (empty($username)){
        die('Error: Please choose a username. <br />
        <input type="submit" name="back" value="Back to form" 
        onclick="self.location=\'/php-exercises/CorePHP/ClassesObjects/validation.php\'" /> </body></html> ');
      }
      $char = strpos($email, '@');
      if (empty($email) || $char === false ){
        die('Error: Please enter a valid email address. <br />
        <input type="submit" name="back" value="Back to form" 
        onclick="self.location=\'/php-exercises/CorePHP/ClassesObjects/validation.php\'" /> </body></html> ');
      }    
      //Confirm responses to user.
    
            //Confirm responses to user.
            echo "<p>The following data has been saved for $name: </p>\n";
            echo "<p>Username: $username<br />\n";
            echo "Email: $email</p>\n";
            echo "<p>Work Access:</p>\n";
            echo "<ul>\n<li>$Cars</li>\n";
            echo "<li>$speed</li>\n";
            echo "<li>$variant</li>\n</ul>\n";
    

        }
        ?>
 