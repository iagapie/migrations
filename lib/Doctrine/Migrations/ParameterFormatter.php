<?php

declare(strict_types=1);

namespace Doctrine\Migrations;

/**
 * The ParameterFormatter defines the interface for formatting SQL query parameters to a string
 * for display output.
 */
interface ParameterFormatter
{
    /**
     * @param mixed[] $params
     * @param mixed[] $types
     * @return string
     */
    public function formatParameters(array $params, array $types): string;
}
