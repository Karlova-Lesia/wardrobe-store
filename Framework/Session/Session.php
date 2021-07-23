<?php


class Session
{
    public function setName(string $name): void
    {
        session_name($name);
    }

    public function getName(): string
    {
        return session_name();
    }

    public function setId(string $id): void
    {
        session_id($id);
    }

    public function getId(): string
    {
        return session_id();
    }

    public function cookieExists(): bool
    {
        return (!empty($_COOKIE));
    }

    public function sessionExists(): bool
    {
        return (!empty($_SESSION));
    }

    public function start(): bool
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
            return true;
        }
        return false;
    }

    public function destroy(): void
    {
        session_destroy();
    }

    public function setSavePath(string $savePath): void
    {
        session_save_path($savePath);
    }

    public function set(string $key, string $value): void
    {
        $_SESSION[$key] = $value;
    }

    public function get(string $key): string
    {
       return $_SESSION[$key];
    }

    public function contains(string $key): bool
    {
        return (isset($_SESSION[$key]));
    }

    public function delete(string $key): void
    {
        unset($_SESSION[$key]);
    }

}