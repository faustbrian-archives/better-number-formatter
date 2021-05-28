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

namespace Konceiver\BetterNumberFormatter\Concerns;

use Illuminate\Support\Str;
use Konceiver\BetterNumberFormatter\ResolveScientificNotation;

trait HasCustomFormatters
{
    public function formatWithCurrencyShort(int | float | string $value, string $currency): string
    {
        $i     = 0;
        $units = ['', 'K', 'M', 'B', 'T'];

        for ($i = 0; $value >= 1000; $i++) {
            $value /= 1000;
        }

        return round((float) $value, 1).$units[$i].' '.strtoupper($currency);
    }

    public function formatWithCurrencyCustom(int | float | string $value, string $currency, ?int $decimals = null): string
    {
        $result = $this->formatWithDecimal((float)$value);

        if (Str::contains((string) $value, ',')) {
            $result = $value;
        }

        if (Str::contains((string) $value, '.')) {
            $result = rtrim(number_format((float) ResolveScientificNotation::execute((float) $value), $decimals ?? 8), '0');
        }

        return rtrim($result.' '.strtoupper($currency));
    }
}
