<?php

// Session

class Session
{
    public function __construct()
    {
        if (empty(session_id())) {
            session_start();
        }
    }

    // Set the sessions
    public function set(string $key, mixed $value): void
    {
        $_SESSION[$key] = $value;
    }
    // Get Items from the sessions
    public function get(string $key): mixed
    {
        if (!empty($_SESSION[$key]))
            return $_SESSION[$key];

        return null;
    }
}
