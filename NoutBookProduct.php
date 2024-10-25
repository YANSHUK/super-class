<?php

class NoutBookProduct extends Product
{
    private string $processor;

    public function __construct(string $name, float $price, string $processor)
    {
        parent::__construct($name, $price);
        $this->processor = $processor;
    }

    public function getAbout(): string
    {
        return parent::getAbout() . ", процессор: " . $this->getProcessor();
    }

    public function getProcessor(): string
    {
        return $this->processor;
    }
}