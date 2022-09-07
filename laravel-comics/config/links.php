<?php

class Link{

    public $name;
    public $isActive;

    public function __construct($_name, $_isActive)
    {
        $this->setName($_name);
        $this->setIsActive($_isActive);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($_name)
    {
        $this->name = $_name;
    }


    public function getIsActive()
    {
        return $this->isActive;
    }


    public function setIsActive($_isActive)
    {
        $this->isActive = $_isActive;
    }
}

return [
    new Link( "Characters",false ),
    new Link( "COMICS",true ),
    new Link( "MOVIES",false ),
    new Link( "TV",false ),
    new Link( "GAMES",false ),
    new Link( "COLLECTIBLES",false ),
    new Link( "VIDEOS",false ),
    new Link( "FANS",false ),
    new Link( "NEWS",false ),
    new Link( "SHOP",false ),
];