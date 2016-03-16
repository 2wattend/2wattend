<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new \CMSilex\CMSilex();

$app->bootstrap();

// replace with mechanism to retrieve EntityManager in your app
$entityManager = $app['em'];

return ConsoleRunner::createHelperSet($entityManager);
