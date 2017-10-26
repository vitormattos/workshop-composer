<?php
use Cocur\Slugify\Slugify;

require_once 'vendor/autoload.php';

$string = 'Minicurso Composer!';
$slug = new Slugify();
echo $slug->slugify($string);
echo "\n";
