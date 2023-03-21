<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Repositories\MessageRepository;

class MessageController
{
    protected $messageRepository;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    public function getByChat(Request $request, Response $response, $args)
    {
        $chatId = $args['chat_id'];

        $messages = $this->messageRepository->getByChat($chatId);

        $response->getBody()->write(json_encode($messages));

        return $response->withHeader('Content-Type', 'application/json');
    }

    public function create(Request $request, Response $response, $args)
    {
        $chatId = $args['chat_id'];
        $author = $request->getParam('author');
        $text = $request->getParam('text');

        $message = $this->messageRepository->create($chatId, $author, $text);

        $response->getBody()->write(json_encode($message));

        return $response->withHeader('Content-Type', 'application/json');
    }
}
