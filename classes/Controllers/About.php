<?php

namespace Controllers;

class About
{
    public function about()
    {
        $title = 'About Us - Redstone Hotel';

        return ['template' => 'about.php', 'title' => $title];
    }
}
