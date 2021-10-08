<?php
class material{
    public $name;
    public $description;
    public $image;
}
class Quotation{
    public $customer;
    public $date;
    public $items;
    public $itemsValue;
    public $totalValue;
    public $vatValue;
}

class gallery{
    var $rows;
    var $cols;
    var $entries;
}
$a=new material("Cement","Sino Cement","\/images\/cement.png");
$b=new material("Cement","Sino Cement","\/images\/cement1.png");
?>