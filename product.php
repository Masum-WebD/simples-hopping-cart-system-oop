<?php
class Product
{
    public $id;
    public $name;
    public $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    public function getFormattedPrice($price)
    {
        return number_format($price, 2, ".", ",");
    }

    public function showDetails()
    {
        return " ID: $this->id, Name: $this->name, Price: $this->price";
    }
}
$showDetails =new Product(1,'T-shirt',50.50);
echo $showDetails->showDetails();
