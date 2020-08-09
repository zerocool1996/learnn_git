<?php
//lop truu tuong Animal
abstract class Animal
{
    protected $name;
    abstract function run();
}

//lop dog ke thua tu lop truu tuong Animal
class Dog extends Animal
{
    public function run()//phuong thuc run dc override lai
    {
        echo 'cho chay bang 4 chan';
    }
}

class Person extends Animal 
{
    public function run()
    {
        echo 'nghuoi di bang 2 chan';
    }
}
