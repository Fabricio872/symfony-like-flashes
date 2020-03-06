<?php

namespace SymfonyLikeFlashes;

class Flashes
{
    public static function add(string $type, string $message): void
    {
        $flashes = $_SESSION['flashes'];
        $flash = new \stdClass();
        $flash->type = $type;
        $flash->message = $message;
        $flashes[] = $flash;
        $_SESSION['flashes'] = $flashes;
    }

    public static function getFlashes(): array
    {
        $flashes = $_SESSION['flashes'];
        unset($_SESSION['flashes']);
        return (array)$flashes;
    }
}