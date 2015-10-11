<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\DriverManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
// or if you prefer yaml or XML
$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

/**
 * $connectionParams     database connection parameters
 * @var array         mysql://user:password@127.0.0.1:port/databasename
 * Reference : http://stackoverflow.com/questions/6259424/troubleshooting-no-such-file-or-directory-when-running-php-app-console-doctri
 * Reference : http://doctrine-dbal.readthedocs.org/en/latest/reference/configuration.html
 */
$connectionParams = array(
    'url' => 'mysql://tahseent_digitem:LuyepBCPLJuTPzFe@127.0.0.1:8889/bug-tracker',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);