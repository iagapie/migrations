<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Exception;

use Doctrine\Migrations\Configuration\Connection\ConnectionLoader;
use InvalidArgumentException;

use function get_class;
use function sprintf;

final class InvalidLoader extends InvalidArgumentException implements ConfigurationException
{
    public static function noMultipleConnections(ConnectionLoader $loader): self
    {
        return new self(sprintf('Only one connection is supported by %s', get_class($loader)));
    }
}
