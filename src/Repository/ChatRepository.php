<?php
namespace ChatApp\Repositories;

use ChatApp\Models\Chat;

class ChatRepository
{
    public function getAll()
    {
        return Chat::all();
    }

    public function create($name)
    {
        return Chat::create([
            'name' => $name,
        ]);
    }
}

?>

