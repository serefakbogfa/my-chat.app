<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Repositories\ChatRepository;

class ChatController
{
    protected $chatRepository;

    public function __construct(ChatRepository $chatRepository)
    {
        $this->chatRepository = $chatRepository;
    }

    public function getAll(Request $request, Response $response)
    {
        $chats = $this->chatRepository->getAll();

        $response->getBody()->write(json_encode($chats));

        return $response->withHeader('Content-Type', 'application/json');
    }

    public function create(Request $request, Response $response)
    {
        $name = $request->getParam('name');

        $chat = $this->chatRepository->create($name);

        $response->getBody()->write(json_encode($chat));

        return $response->withHeader('Content-Type', 'application/json');
    }
}
