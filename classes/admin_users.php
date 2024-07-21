<?php

class admin_users extends \PicoORM
{
    public function setPassword($password) {
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $this->password_hash = $hash;
        $this->save();
    }
}