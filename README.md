# my-chat.app

- chat_app/
    - src/
        - Controllers/
            - ChatController.php
            - MessageController.php
        - Models/
            - Chat.php
            - Message.php
        - Repositories/
            - ChatRepository.php
            - MessageRepository.php
        - app.php
        - dependencies.php
        - routes.php
    - vendor/
    - .env
    - composer.json
    - composer.lock
    - db/
        - chat_app.db


        Documentation for My-Chat-App

Introduction:
My-Chat-App is a web-based chat application designed to allow users to create and join chat rooms, and to communicate with each other in real-time. The application uses a RESTful API to manage user interactions and is built using the Slim PHP micro-framework, SQLite database, and Vue.js for the front-end.

Installation:
To install My-Chat-App, follow these steps:

-Clone the project from GitHub to your local machine
-Install Composer (https://getcomposer.org/download/)
-In the root directory of the project, run composer install
-Copy the .env.example file to .env and configure the settings as needed
-Run the application using a web server (such as Apache or Nginx) or the built-in PHP web server with the command php -S localhost:8000 -t public/
Configuration:
-The configuration of the application is handled in the .env file. Here are the available settings:

-APP_NAME: The name of the application (default: "My Chat App")
-APP_ENV: The environment the application is running in (default: "development")
-APP_DEBUG: Whether or not debugging is enabled (default: true)
-DATABASE_PATH: The path to the SQLite database file (default: "db/chat_app.db")
Routes:
The application has the following routes:

-GET /api/chats: Returns a list of all available chats
-POST /api/chats: Creates a new chat
-GET /api/chats/{id}: Returns the details of a specific chat
-PATCH /api/chats/{id}: Updates the details of a specific chat
-DELETE /api/chats/{id}: Deletes a specific chat
-GET /api/chats/{id}/messages: Returns a list of messages for a specific chat
-POST /api/chats/{id}/messages: Creates a new message in a specific chat
-GET /api/users: Returns a list of all registered users
-POST /api/users: Registers a new user
-GET /api/users/{id}: Returns the details of a specific user
-PATCH /api/users/{id}: Updates the details of a specific user
-DELETE /api/users/{id}: Deletes a specific user
Models:
The application has two models:

-Chat: Represents a chat room
-Message: Represents a message in a chat room
-Repositories:
-The application has two repositories:

-ChatRepository: Handles interactions with the Chat model
-MessageRepository: Handles interactions with the Message model
Controllers:
The application has two controllers:

-ChatController: Handles requests related to chats
-MessageController: Handles requests related to messages
Dependencies:
The application has the following dependencies:

Slim PHP micro-framework (https://www.slimframework.com/)
SQLite database
Vue.js (https://vuejs.org/)
Conclusion:
My-Chat-App is a simple yet powerful web-based chat application built using the Slim PHP micro-framework, SQLite database, and Vue.js. The application provides a RESTful API for managing user interactions and is easy to install and configure.
