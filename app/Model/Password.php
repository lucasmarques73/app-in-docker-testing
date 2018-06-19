<?php 

namespace Model;

class Password
{
    public static function verify($pass, $again)
    {
        return password_verify($pass,$again);
    }

    public static function makeHash($plain, $algo = PASSWORD_DEFAULT)
    {
        return password_hash($plain,$algo);
    }
}