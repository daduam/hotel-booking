<?php

namespace Controllers;

class Home
{
    // public function __contruct()
    // {

    // }

    public function home()
    {
        $title = 'Home - Redstone Hotel';

        return ['template' => 'home.php', 'title' => $title];
    }
}
