<?php

declare(strict_types=1);

/*
 * This file is part of Better Number Formatter.
 *
 * (c) Konceiver Oy <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Konceiver\BetterNumberFormatter;

final class ResolveScientificNotation
{
    public static function execute(float $float): string
    {
        $parts = explode('E', strtoupper((string) $float));

        if (count($parts) === 2) {
            $exp     = abs(end($parts)) + strlen($parts[0]);
            $decimal = number_format($float, (int) $exp);

            return strval(rtrim($decimal, '.0'));
        }

        return strval($float);
    }
}
