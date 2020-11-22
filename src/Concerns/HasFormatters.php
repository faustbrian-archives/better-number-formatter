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

use NumberFormatter;

trait HasFormatters
{
    /**
     * @param int|float $value
     */
    public function formatWithCurrency($value): string
    {
        return $this->withStyle(NumberFormatter::CURRENCY)->format($value);
    }

    /**
     * @param int|float $value
     */
    public function formatWithCurrencyAccounting($value): string
    {
        /* @phpstan-ignore-next-line */
        return $this->withStyle(NumberFormatter::CURRENCY_ACCOUNTING)->format($value);
    }

    /**
     * @param int|float $value
     */
    public function formatWithDecimal($value): string
    {
        return $this->withStyle(NumberFormatter::DECIMAL)->format($value);
    }

    /**
     * @param int|float $value
     */
    public function formatWithDefaultStyle($value): string
    {
        return $this->withStyle(NumberFormatter::DEFAULT_STYLE)->format($value);
    }

    /**
     * @param int|float $value
     */
    public function formatWithDuration($value): string
    {
        return $this->withStyle(NumberFormatter::DURATION)->format($value);
    }

    /**
     * @param int|float $value
     */
    public function formatWithIgnore($value): string
    {
        return $this->withStyle(NumberFormatter::IGNORE)->format($value);
    }

    /**
     * @param int|float $value
     */
    public function formatWithOrdinal($value): string
    {
        return $this->withStyle(NumberFormatter::ORDINAL)->format($value);
    }

    /**
     * @param int|float $value
     */
    public function formatWithPercent($value, ?int $decimals): string
    {
        if (! is_null($decimals)) {
            return sprintf('%0.'.$decimals.'f', $value, $decimals).'%';
        }

        return $this->withStyle(NumberFormatter::PERCENT)->format($value);
    }

    /**
     * @param int|float $value
     */
    public function formatWithScientific($value): string
    {
        return $this->withStyle(NumberFormatter::SCIENTIFIC)->format($value);
    }

    /**
     * @param int|float $value
     */
    public function formatWithSpellout($value): string
    {
        return $this->withStyle(NumberFormatter::SPELLOUT)->format($value);
    }

    /**
     * @param int|float $value
     */
    private function format($value): string
    {
        return $this->formatter->format($value);
    }
}
