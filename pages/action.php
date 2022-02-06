<?php
require_once '../vendor/autoload.php';
use App\classes\Series;
use App\classes\Product;


if (isset($_POST['btn']))
{
    $series = new Series($_POST);
    $result = $series->makeSeries();
    include 'series.php';
}
else if(isset($_GET['status']))
{
    if ($_GET['status'] == 'product')
    {
        $product  = new Product();
        $products = $product->getAllProduct();
        include 'product.php';
    }
}
else
{
    header('Location: series.php');
}


