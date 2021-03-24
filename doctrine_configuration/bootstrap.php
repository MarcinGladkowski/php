<?php
// bootstrap.php
use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// or if you prefer yaml or XML
Type::addType('uuid', 'Ramsey\Uuid\Doctrine\UuidType');

// database configuration parameters
$connectionParams = array(
    'dbname' => 'app',
    'user' => 'appuser',
    'password' => 'password',
    'host' => 'db',
    'driver' => 'pdo_mysql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);
// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

//var_dump($entityManager->getConnection()->connect());
