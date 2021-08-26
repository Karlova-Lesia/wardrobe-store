<?php

namespace Framework\Session;

use Exception;

class Session
{
    /**
     * @throws Exception
     */
    public static function setName(string $name): void
    {
        if (!self::sessionExists()) {
            throw new Exception('Session is not exists yet');
        }
        session_name($name);
    }

    /**
     * @throws Exception
     */
    public static function getName(): string
    {
        if (!self::sessionExists()) {
            throw new Exception('Session is not exists yet');
        }
        return session_name();
    }

    /**
     * @throws Exception
     */
    public static function setId(string $id): void
    {
        if (!self::sessionExists()) {
            throw new Exception('Session is not exists yet');
        }
        session_name($id);
    }

    /**
     * @throws Exception
     */
    public static function getId(): string
    {
        if (!self::sessionExists()) {
            throw new Exception('Session is not exists yet');
        }
        return session_name();
    }

    public static function cookieExists(): bool
    {
        return (!empty($_COOKIE));
    }

    public static function sessionExists(): bool
    {
        return (!empty($_SESSION));
    }

    /**
     * @throws Exception
     */
    public static function start()
    {
        if (!self::sessionExists()) {
            session_start();
        }
    }

    /**
     * @throws Exception
     */
    public static function destroy(): void
    {
        if (self::sessionExists()) {
            session_destroy();
        }
    }

    /**
     * @throws Exception
     */
    public static function setSavePath(string $savePath): void
    {
        if (!self::sessionExists()) {
            throw new Exception('Session is not exists yet');
        }
        session_save_path($savePath);
    }

    /**
     * @throws Exception
     */
    public static function set(string $key, string $value): void
    {
        if (!self::sessionExists()) {
            throw new Exception('Session is not exists yet');
        }
        $_SESSION[$key] = $value;
    }

    /**
     * @throws Exception
     */
    public static function get(string $key): string
    {
        if (!self::sessionExists()) {
            throw new Exception('Session is not exists yet');
        }
        return $_SESSION[$key];
    }

    /**
     * @throws Exception
     */
    public static function contains(string $key): bool
    {
        if (!self::sessionExists()) {
            throw new Exception('Session is not exists yet');
        }
        return (isset($_SESSION[$key]));
    }

    /**
     * @throws Exception
     */
    public static function delete(string $key): void
    {
        if (!self::sessionExists()) {
            throw new Exception('Session is not exists yet');
        }
        unset($_SESSION[$key]);
    }
}
