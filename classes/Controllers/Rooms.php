<?php

namespace Controllers;

class Rooms
{
    public function rooms()
    {
        $title = 'Hotel Rooms - Redstone Hotel';

        return ['template' => 'rooms.php', 'title' => $title];
    }
}
