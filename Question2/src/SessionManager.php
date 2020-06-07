<?php

namespace Cart;
class SessionManager
{

    /**
     * SessionManager constructor.
     */
    public function __construct()
    {
        session_start();
    }

    public function get($key)
    {
        if (!isset($_SESSION[$key])) {
            $_SESSION[$key] = [];
        }
        return $_SESSION[$key];
    }

    public function set($key, array $items)
    {
        $_SESSION[$key] = $items;
    }
}