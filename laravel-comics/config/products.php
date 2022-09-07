<?php

class Product
{

    protected $title;
    protected $url;

    function __construct($_title, $_url)
    {
        $this->setTitle($_title);
        $this->setUrl($_url);
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($_url)
    {
        $this->url = $_url;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($_title)
    {
        $this->title = $_title;
    }
}


return [
    new Product("DIGITAL COMICS", "buy-comics-digital-comics.png"),
    new Product("DC MERCHANDISE", "buy-comics-merchandise.png",),
    new Product("SUBSCRIPTION", "buy-comics-subscriptions.png",),
    new Product("COMIC SHOP LOCATOR", "buy-comics-shop-locator.png",),
    new Product("DC POWER VISA", "buy-dc-power-visa.svg",)
];
