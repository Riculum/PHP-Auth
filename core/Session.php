<?php
namespace Auth\Core;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class Session {

    public static function destroySession()
    {
        session_destroy();
    }

    /**
     * @return string|null
     */
    static function getUserToken(): ?string
    {
        return $_SESSION['userToken'] ?? null;
    }

    /**
     * @return string|null
     */
    public static function getUserUUID(): ?string
    {
        return $_SESSION['userUUID'] ?? null;
    }

    /**
     * @param string $token
     */
    static function setUserToken(string $token)
    {
        $_SESSION['userToken'] = $token;
    }

    static function setUserUUID(int $uuid)
    {
        $_SESSION['userUUID'] = $uuid;
    }
}