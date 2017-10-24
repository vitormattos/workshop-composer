<?php
use Cocur\Slugify\Slugify;

require_once 'vendor/autoload.php';

if(file_exists('.env')) {
    $dotenv = new Dotenv\Dotenv(__DIR__);
    $dotenv->load();
}

echo getenv('TESTE');
echo "\n";

$string = 'Minicurso Composer!';
$slug = new Slugify();
echo $slug->slugify($string);
echo "\n";