<h1>#5: Variable Argument Number
Two versions of a script revisiting weather conditions. Functions for HTML, and a function that can accept a string or array as argument.

</h1><?php 
$browsers=array(
    "Firefox",
    "Chrome",
    "Internet Explorer",
    "Safari",
    "Opera",
    "Other" 
  );    
class Select{
  //Property
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

  public function setValue($value){
     $this->value = $value;
  }

    public function getValue(){
        return $this->value;
    }
    private function makeOptions($value){ ////get options from array
        foreach($value as $v){  //key as a value
           echo "<option value=\"$v\">" .ucfirst($v). "</option>\n";
         }
    }
    public function makeSelect(){  //select option
        echo "<select name=\"" .$this->getName(). "\">\n";
        //Create options.
        $this->makeOptions($this->getValue());
        echo "</select>" ;
    }
}

//If form not submitted, display form.
  if(!isset($_POST['submit'])){
?>
 
<form method="post" action="/php-exercises/CorePHP/Funtions/Variable.php">
    <p>Name:<br />
    <input type="text" name="name" size="60" />  </p>
    <p>Username:<br />
    <input type="text" name="username" size="60" /></p>
    <p>Email:<br />
    <input type="text" name="email" size="60" /></p>
    <p>Browser:
    
    <?php
    //Instantiate object.
    $browser = new Select();
    //Set properties.
    $browser->setName('browser');
    $browser->setValue($browsers);
    //The object has the data it needs from the preceding commands.
    //Tell it to make the select field.
    $browser->makeSelect();
    ?>
    </p>
    <input type="submit" name="submit" value="Go" />
    
</form>

<?php
  //If form submitted, process input.
  }else{
    //Could include code to send data to database here.
    //Retrieve user responses.
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    //The following variable has an altered name to avoid confusion.
    $selBrowser=$_POST['browser'];
    //Confirm responses to user.
    echo "The following data has been saved for $name: <br />";
    echo "Username: $username<br />";
    echo "Email: $email<br />";
    echo "Browser: $selBrowser<br />";
 
}
?>
 
 