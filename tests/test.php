<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use SymfonyLikeFlashes\Flashes;

Flashes::add('success','test');

foreach (Flashes::getFlashes() as $flash){
    echo $flash->type;
    echo $flash->message;
}
