<?php
class ControllerUtils
{
    public static function showMessage($msg, $code, $pararExecucao = false)
    {
        http_response_code($code);
        echo json_encode(array("codigo"=>$code, "mensagem"=>$msg));
        if ($pararExecucao) { die(); }
    }

}
?>