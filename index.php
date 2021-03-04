<?php

require __DIR__ . '/vendor/autoload.php';
use Application\Application;
use Application\factory_method\linkedIn\LinkedInPoster;
use Application\factory_method\facebook\FacebookPoster;


$app = new Application();

/**
 * Фабричный метод
 * Отлично подходит для создания разных обеъктов со схожим функционалом
**/
echo 'Test factory method' . "<br/>";
$app->factoryMethod(new LinkedInPoster("kekCheburek", '123'));
echo 'Test factory method #2' . "<br/>";
$app->factoryMethod(new FacebookPoster("Тоже самое, но фейсбук", '123'));

/**
 * Строитель(Builder)
 * В PHP активно используется для составление Sql запросов
 **/

echo "<br/>";
echo 'Test MySQL query builder' . "<br/>";
$app->builder(new \Application\builder\components\MysqlQueryBuilder());
echo "<br/>" . "<br/>";
echo 'Text PostreSQL query builder' . "<br/>";
$app->builder(new \Application\builder\components\PostgresQueryBuilder());