<?php 
require "Laser.php";
require "Volo.php";
require "Razzo.php";
require "Gas.php";

class IronMan{
    use Gas;
    public static $counter = 0;
    public $attack1;
    public $attack2;
    public $move;

    public function __construct(BraccioDestro1 $attack1, BraccioSinistro1 $attack2, Gambe $move){
        $this->attack1 = $attack1;
        $this->attack2 = $attack2;
        $this->move = $move;
        self :: $counter++;
    }

    public function attack1(){
        $this->attack1->attack1();
    }

    public function attack2(){
        $this->attack2->attack2();
    }

    public function move(){
        $this->move->move();
    }
}
?>