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
use RuntimeException;

trait HasFormatters
{
    public function formatWithCurrency(int | float $value): string
    {
        return $this->withStyle(NumberFormatter::CURRENCY)->format($value);
    }

    public function formatWithCurrencyAccounting(int | float $value): string
    {
        /* @phpstan-ignore-next-line */
        return $this->withStyle(NumberFormatter::CURRENCY_ACCOUNTING)->format($value);
    }

    public function formatWithDecimal(int | float $value): string
    {
        return $this->withStyle(NumberFormatter::DECIMAL)->format($value);
    }

    public function formatWithDefaultStyle(int | float $value): string
    {
        return $this->withStyle(NumberFormatter::DEFAULT_STYLE)->format($value);
    }

    public function formatWithDuration(int | float $value): string
    {
        return $this->withStyle(NumberFormatter::DURATION)->format($value);
    }

    public function formatWithIgnore(int | float $value): string
    {
        return $this->withStyle(NumberFormatter::IGNORE)->format($value);
    }

    public function formatWithOrdinal(int | float $value): string
    {
        return $this->withStyle(NumberFormatter::ORDINAL)->format($value);
    }

    public function formatWithPercent(int | float $value, ?int $decimals = null): string
    {
        if (! is_null($decimals)) {
            return sprintf('%0.'.$decimals.'f', $value, $decimals).'%';
        }

        return $this->withStyle(NumberFormatter::PERCENT)->format($value);
    }

    public function formatWithScientific(int | float $value): string
    {
        return $this->withStyle(NumberFormatter::SCIENTIFIC)->format($value);
    }

    public function formatWithSpellout(int | float $value): string
    {
        return $this->withStyle(NumberFormatter::SPELLOUT)->format($value);
    }

    public function format(int | float $value): string
    {
        $value = $this->formatter->format($value);

        if ($value === false) {
            throw new RuntimeException('Failed to format the given value.');
        }

        return $value;
    }

    public function formatCurrency(int | float $value, ?string $currency = null): string
    {
        $value = $this->withStyle(NumberFormatter::CURRENCY)
            ->formatter
            ->formatCurrency(
                $value,
                $currency ?? $this->getTextAttribute(NumberFormatter::CURRENCY_CODE)
            );

        if ($value === false) {
            throw new RuntimeException('Failed to format the given value.');
        }

        return $value;
    }
}
