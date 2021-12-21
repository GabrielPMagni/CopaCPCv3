<?php
require_once($_SERVER['DOCUMENT_ROOT']."/API/models/pessoa.php");
require_once($_SERVER['DOCUMENT_ROOT']."/API/controllers/utils/shared.php");

$metodoRequisicao = $_SERVER['REQUEST_METHOD'];
$caminhoRequisicao = $_SERVER['REQUEST_URI'];
$parametrosRequisicao = null;
switch($metodoRequisicao) 
{
    case "GET":
        if (isset($_GET) && !empty($_GET)){
            $parametrosRequisicao = json_encode($_GET);
        }
        break;
    case "POST":
        $data = json_encode(file_get_contents("php://input"));
        if ($data && !empty($data)){
            $parametrosRequisicao = $data;
        }
        break;
    case "PATCH":
        $data = json_encode(file_get_contents("php://input"));
        if ($data && !empty($data)){
            $parametrosRequisicao = $data;
        }
        break;
    case "DELETE":
        $data = json_encode(file_get_contents("php://input"));
        if ($data && !empty($data)){
            $parametrosRequisicao = $data;
        }
        break;
    default:
        ControllerUtils::showMessage("Méotodo não suportado", 405);
        break;

} 


?>