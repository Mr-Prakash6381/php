<?php
class vehicle{
    function __construct($brandname, $speedvalue){
        $this->brand =$brandname;
        $this->speed=$speedvalue;
    }
    function printdetalis(){
        echo "Vehicle brand is : " .$this->brand ;
        echo "  ";
        echo "Vehicle spped is : " .$this->speed;
        echo "<br>";
    }
}
$car1= new vehicle("Toyota",130);
$car2= new vehicle("Ferrari",450);
$car1->printdetalis();
$car2->printdetalis();
?>