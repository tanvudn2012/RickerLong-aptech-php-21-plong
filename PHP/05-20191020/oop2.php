<?php
class Hero
{
    protected $name;
    public static function Homeword()
    {
        echo "<H1>Homeword 1+2</H1> <br>";
    }
    public function __construct()
    {
        echo "Begin of class<br>";
    }
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function getName()
    {
        return $this->name;
    }
    public function display()
    {
        echo $this->name . "<br>";
    }
}

class superHero extends Hero 
{
    private $old;
    function Homeword2(){
        echo "<h1>Class inheritance</h1>";
    }
    function setOld($old)
    {
        $this->old = $old;
    }
    function getOld(){
        return $this->old;
    }
    public function __construct(){
        parent::__construct();
        echo'Class Inheritance ' . '<br>';
    }
    public function __destruct()
    {
        echo "End of class.<br>";
    }
}
Hero::Homeword();
$antimage = new Hero;
$antimage->setName("ANTIMAGE")->display();
$antimage->setName('Hello ahihi');
echo  $antimage->getName() .'<br>';

###########################################################


echo "<h1> BT2 class Inheritance </h1> <br>";
$superHero = new superHero;
$superHero->setName('I am is Vũ');
$superHero->setOld('I am 21 years old this year');
echo $superHero->getName().'<br>';
echo $superHero->getOld().'<br>';

?>