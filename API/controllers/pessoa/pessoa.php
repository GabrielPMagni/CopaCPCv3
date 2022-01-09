<?php

$metodo = $_SERVER['REQUEST_METHOD'];

$data = json_decode(file_get_contents('php://input'));

$retorno_exemplo = array();
for ($i = 0; $i<20;$i++) {
    $retorno_exemplo[$i] = array('id'=>$i, 'nome'=>'João'.$i);
}

if ($metodo === 'POST') {
    $id = $data->id;
    echo($retorno_exemplo[$id]['nome']);
} else {
    echo('Método inválido');
}


// echo $data->id;