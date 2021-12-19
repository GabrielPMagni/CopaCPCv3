<?php
class Utils
{
    private $emailModelo = '/[a-z0-9!#$%&\'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g';

    public function validateEmail($email)
    {
        if (preg_match($this->emailModelo, $email))
        {

        }
    }
}
?>