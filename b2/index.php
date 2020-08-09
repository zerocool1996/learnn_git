<?php 
    class Books {
        
        var $price;
        var $title;

        function __construct($par1, $par2)
        {
            $this->price = $par2;
            $this->title = $par1;
        }
        
        function setPrice($par){
            $this->price = $par;
        }

        function getPrice(){
            return $this->price;
        }
        function setTitle($par){
            $this->title = $par;
        }

        function getTitle(){
            return $this->title;
        }
    }
    $tienganh = new Books("English Grammar in use", 10);
    $math   = new Books("Advanced Chemistry", 15);
    $chemistry = new Books("Algebra", 7);

    // $physic->setTitle("Physic for High School");
    // $chemistry->setTitle("Advanced Chemistry");
    // $math->setTitle("Algebra");

    // $physic->setPrice(10);
    // $chemistry->setPrice(15);
    // $math->setPrice(7);

    //echo $math->getPrice();
    class Novel extends Books{
        var $publisher;

        function setPublisher($par){
            $this->publisher = $par;
        }

        function getPublisher(){
            return $this->publisher.'<br>';
        }
    }
?>