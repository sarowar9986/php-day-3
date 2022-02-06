<?php

namespace App\classes;
class Product
{
    protected $products = [];

    public function getAllProduct()
    {
        $this->products = [
            0 => [
              'name' => 'New T-Shirt',
              'price' => '4500',
              'description' => 'Product description',
              'image'       => 'p1.jpg',
            ],
            1 => [
                'name' => 'New Shari',
                'price' => '5500',
                'description' => 'Product description',
                'image'       => 'p2.jpg',
            ],
            2 => [
                'name' => 'New Watch',
                'price' => '6500',
                'description' => 'Product description',
                'image'       => 'p3.jpg',
            ],
            3 => [
                'name' => 'Tangial Shari',
                'price' => '7500',
                'description' => 'Product description',
                'image'       => 'p4.jpg',
            ],
        ];
        return $this->products;
    }
}