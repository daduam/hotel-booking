<?php

namespace Controllers;

class Admin
{
    // public function __contruct()
    // {

    // }

    public function login()
    {
        $title = 'Admin Login - Redstone Hotel';

        return ['template' => 'admin-login.php', 'title' => $title];
    }
}
