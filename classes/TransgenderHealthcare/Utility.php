<?php

namespace TransgenderHealthcare;
class Utility
{
    static public function generateRandomString($length = 10)
    {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ()*&^%$#@!-+=_/?[]{}~', ceil($length / strlen($x)))), 1, $length);
    }

}