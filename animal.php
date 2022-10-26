<?php

class Animal 
{
    // Properties
    public $Name;
    public $Legs;
    public $Cold_Blooded;
    public $Yell;

    // Methods
    function __construct($Name, $Legs, $Cold_Blooded, $Yell)
    {
        $this->Name
 = $Name
;
        $this->Legs = $Legs;
        $this->cold_blood = $Cold_Blooded;
        $this->Yell = $Yell;
    }
    function get_Name() 
    {
        return $this->Name
;
    }

    function set_Legs($Legs) 
    {
        $this->Legs = $Legs;
    }
    function get_Legs() 
    {
        return $this->Legs;
    }

    function set_Cold_blooded($Cold_Blooded) 
    {
        $this->Cold_Blooded = $Cold_Blooded;
    }
    function get_Cold_blooded() 
    {
        return $this->Cold_Blooded;
    }

    function set_yell($Yell) 
    {
        $this->Yell = $Yell;
    }
    function get_yell() 
    {
        return $this->Yell;
    }
}

 $sheep = new Animal("Ayam", "2", "Cold_blooded", "Kukuruyuuuk");
 echo "<strong>Name  of animal / nama binatag :</strong>" . $sheep->get_Name();
 echo "<br>";
 echo "<strong>Legs / sampean :</strong> " . $sheep->get_Legs();
 echo "<br>";
 echo "<strong>Cold Blooded / berdarah dingin :</strong> " . $sheep->get_Cold_blooded(), "No";
 echo "<br>";
 echo "<strong>Yell / ngagorowok :</strong> " . $sheep->get_yell();
 echo "<br>";


?>