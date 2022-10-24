<?php
class Frog 
{
    // Properties
    public $name;
    public $legs;
    public $cold_blooded;
    public $jump;

    // Methods
    function __construct($name, $legs, $cold_blooded, $jump)
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
        $this->jump = $jump;

    }
    function get_name() 
    {
        return $this->name;
    }

    function set_legs($legs) 
    {
        $this->legs = $legs;
    }
    function get_legs() 
    {
        return $this->legs;
    }

    function set_cold_blooded($cold_blooded) 
    {
        $this->cold_blooded = $cold_blooded;
    }
    function get_cold_blooded() 
    {
        return $this->cold_blooded;
    }

    function set_jump($jump) 
    {
        $this->jump = $jump;
    }
    function get_jump() 
    {
        return $this->jump;
    }
}

$katak = new Frog ("Katak", "4", "No", "Plak plak plak");
echo "<strong>Name :</strong> " . $katak->get_name();
echo "<br>";
echo "<strong>Legs :</strong> " . $katak->get_legs();
echo "<br>";
echo "<strong>Cold Blooded :</strong> " . $katak->get_cold_blooded();
echo "<br>";
echo "<strong>Jump :</strong> " . $katak->get_jump();
echo "<br>";


?>