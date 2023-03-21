<?php
namespace ChatApp\Repositories;

use ChatApp\Models\Message;

class MessageRepository
{
    public function getByChat($chatId)
    {
        return Message::where('chat_id', $chatId)->get();
    }

    public function create($chatId, $author, $text)
    {
        return Message::create([
            'chat_id' => $chatId,
            'author' => $author,
            'text' => $text,
        ]);
    }
}

?>