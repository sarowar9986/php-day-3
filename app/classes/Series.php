<?php

namespace App\classes;
class Series
{
    public $firstNumber;
    public $secondNumber;
    public $result;
    public $i;

    public function __construct($post = null)
    {
        $this->firstNumber  = $post['starting_number'];
        $this->secondNumber = $post['ending_number'];
    }

    public function index()
    {
        header('Location: pages/series.php');
    }

    public function makeSeries()
    {
        for($this->i = $this->firstNumber; $this->i <= $this->secondNumber; $this->i++)
        {
            $this->result .= $this->i.' ';
        }
        return $this->result;
    }
}
