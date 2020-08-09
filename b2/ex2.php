<?php 
//interface Move
interface Move
{
    function run();
}

// lop Dog ke thua tu interface
class Dog implements Move
{
    public function run()// phuowng thuc duoc override lai va viet than ham cho no 
    {
        echo "Cho chay bang 4 chan";
    }
}

// Lop car ke thua tu interface
class Car implements Move
{
    public function run()
    {
        echo "xe hoi chay bang 4 banh";
    }
}