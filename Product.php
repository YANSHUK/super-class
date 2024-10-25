<?php

class Product
{
    protected string $name;
    protected float $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getAbout(): string
    {
        return "о товаре Название: " . $this->name . " цена " . $this->price;
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

}