<?php
class  hocsinh
{
    var $id, $name, $age, $address;
    function __construct($id, $name, $age, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->age = $age;
    }

    function display(){
        echo "id: ".$this->id."name: ".$this->name."<br>age :".$this->age."<br>address: ".$this->address;
    }
}

$zero = new hocsinh(1,'zero',24, 'ha noi');
$zero->display();
