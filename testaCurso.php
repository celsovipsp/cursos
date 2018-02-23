<?php
/**
 * Created by PhpStorm.
 * User: 27834372874
 * Date: 19/02/2018
 * Time: 19:55
 */
include 'vendor/autoload.php';

$c1 = new App\Model\Curso();
$c1->setNome("");


$c1DAO = new App\DAO\CursoDAO();
foreach ($c1DAO->pesquisar($c1) as $item){
    echo $item->getId(). $item->getNome().$item->getValor()."<br>";
}

