<?php

namespace Colors;

class Messages {

    public static function addMessage(string $type, string $message) : void
    {
        $_SESSION['messages'][] = [
            'type' => $type,
            'message' => $message
        ];
    }

    public static function getMessages() : array
    {
        $messages = $_SESSION['messages'] ?? [];
        $_SESSION['messages'] = [];
        return $messages;
    }

    public static function ifMessages() : bool
    {
        return !empty($_SESSION['messages']);
    }
}