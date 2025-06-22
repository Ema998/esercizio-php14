<?php 
require "IronMan.php";

$number = trim(readline("Inserisci il numero di IronMan da creare: "));

function createIronMan($number){
    for($i = 0; $i < $number; $i++){
        $ironMan = new IronMan(new Razzo, new Laser, new Volo);
        $ironMan->attack1();
        $ironMan->attack2();
        $ironMan->move();
    }
    echo "Numero totale di IronMan creati: " . IronMan::$counter . "\n";
}
?>