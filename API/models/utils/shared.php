<?php
class ModelUtils
{
    
    public static function validaEmail($email)
    {
        $emailModelo = '/[a-z0-9!#$%&\'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g';
        return (preg_match($emailModelo, $email));
    }

    public static function getEstadosBrasil()
    {
        $listagemEstadosURL = "https://servicodados.ibge.gov.br/api/v1/localidades/estados";
        return require($listagemEstadosURL);
    }
}
?>