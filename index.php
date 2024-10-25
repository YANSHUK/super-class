<?php

require_once 'Product.php';
require_once 'NoutBookProduct.php';

$apple = new Product("яблоко", 2);

echo $apple->getAbout();

echo "<hr>";

$nout = new NoutBookProduct("asus", 1600, "n900");
echo $nout->getAbout();