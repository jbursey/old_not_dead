<?php

class Character
{
    public string $name;
    public string $power;
    public bool $isVillain;

    public function __construct($name, $power, $isVillain)
    {
        $this->name = $name;
        $this->power = $power;
        $this->isVillain = $isVillain;
    }    
}

class CharacterHTMLOutput
{
    private Character $_character;

    public function __construct($character)
    {
        $this->_character = $character;
    }

    public function ToHTML()
    {
        $html = "";

        $html = $html."<div>";
        $html = $html."<div>".$this->_character->name."</div>";
        $html = $html."<div>".$this->_character->power."</div>";
        $html = $html."<div>".$this->_character->isVillain."</div>";
        $html = $html."</div>";

        return $html;
    }
}

?>