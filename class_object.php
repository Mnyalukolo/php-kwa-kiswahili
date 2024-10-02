<?php

class Fruit{
    //variable declation
    public $name;
    public $color;
    public function setname($name){
        $this->name = $name;
    }
    public function getname(){
        return $this ->name;
    }

}

//calling the variable name as you see bellow
$app= new Fruit();
$app->setname("apple");
echo 'the fruit name is ' .  $app->getname();

echo "<br>";
//if not write echo does not print anything';
$mango= new Fruit();
$mango->setname("mangle");
echo 'the fruit name is ' .$mango->getname();




?>