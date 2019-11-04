<?php
class Project
{
    private $name;
    function set($vu)
    {
        $this->name=$vu;
    }
    function get(){
        return $this->name;
    }   
}
$Project= new Project();
$Project->set('Xin chào Vũ');
echo $Project->get();
?>