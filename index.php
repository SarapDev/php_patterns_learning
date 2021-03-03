<?php

require __DIR__ . '/vendor/autoload.php';
use Application\Application;
use Application\factory_method\linkedIn\LinkedInPoster;
use Application\factory_method\facebook\FacebookPoster;


$app = new Application();
echo 'Test factory method' . "<br/>";
$app->factoryMethod(new LinkedInPoster("kekCheburek", '123'));
echo 'Test factory method #2' . "<br/>";
$app->factoryMethod(new FacebookPoster("Тоже самое, но фейсбук", '123'));