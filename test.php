<?php
$laptops=array(
    "Hp Laptops",
    "Dell laptops",
    "MI Laptops",
    "Asus laptops",
    "Lenovo Laptops",
    "Asser laptops",
);

class select{
// private $name;   //String variable.
// private $value;  //Array variable.

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

 public function makeOptions($value)
 {
   foreach($value as $v){
    echo "<option value=\"$v\">" .ucfirst($v). "</option>\n";
   }
 }
 public function makeSelect(){
    echo "<select name=\"" .$this->getName(). "\">\n";
    //Create options.
    $this->makeOptions($this->getValue());
    echo "</select>" ;
    }
}
?>

<p>Car: 

    <?php
        //Instantiate object.
        $view = new Select();
        //Set properties.
        $view->setName('views');
        $view->setValue($laptops);
        //The object has the data it needs from the preceding commands.
        //Tell it to make the select field.
        $view->makeSelect();
        //Destroy the object.
        unset($laptops);
        
?>