<?php

namespace SymfonyLikeFlashes;

use Illuminate\Support\Facades\Session;

class Flashes
{
    public static function add(string $type, string $message): void
    {
        $flashes = Session::get('flashes');
        $flash = new \stdClass();
        $flash->type = $type;
        $flash->message = $message;
        $flashes[] = $flash;
        Session::put('flashes', $flashes);
    }

    public static function getFlashes(): array
    {
        $flashes = Session::get('flashes');
        Session::remove('flashes');
        return (array)$flashes;
    }
}