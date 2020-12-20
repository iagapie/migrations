<?php

declare(strict_types=1);

use Doctrine\DBAL\DriverManager;
use Doctrine\Migrations\Configuration\Connection\ExistingConnection;
use Doctrine\Migrations\Configuration\Migration\ConfigurationArray;
use Doctrine\Migrations\DependencyFactory;

$conn = DriverManager::getConnection(['driver' => 'pdo_sqlite', 'memory' => true]);

$config = new ConfigurationArray([
    'custom_template' => 'foo',
    'migrations_paths' => ['DoctrineMigrationsTest' => '.'],
]);

return DependencyFactory::fromConnection($config, new ExistingConnection($conn));
