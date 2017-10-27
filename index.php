<?php
declare(strict_types = 1);

require __DIR__ . '/vendor/autoload.php';

$obj = new App\Calc();

var_dump($obj->sum(1, 2) === 3);
