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

trait HasAttributes
{
    public function withParseIntOnly(int | float $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::PARSE_INT_ONLY, $value);

        return $this;
    }

    public function withGroupingUsed(int | float $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::GROUPING_USED, $value);

        return $this;
    }

    public function withDecimalAlwaysShown(int | float $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::DECIMAL_ALWAYS_SHOWN, $value);

        return $this;
    }

    public function withMaxIntegerDigits(int $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::MAX_INTEGER_DIGITS, $value);

        return $this;
    }

    public function withMinIntegerDigits(int $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::MIN_INTEGER_DIGITS, $value);

        return $this;
    }

    public function withIntegerDigits(int $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::INTEGER_DIGITS, $value);

        return $this;
    }

    public function withMaxFractionDigits(int $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::MAX_FRACTION_DIGITS, $value);

        return $this;
    }

    public function withMinFractionDigits(int $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::MIN_FRACTION_DIGITS, $value);

        return $this;
    }

    public function withFractionDigits(int $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, $value);

        return $this;
    }

    public function withMultiplier(int $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::MULTIPLIER, $value);

        return $this;
    }

    public function withGroupingSize(int $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::GROUPING_SIZE, $value);

        return $this;
    }

    // @TODO
    public function withRoundingIncrement(int $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::ROUNDING_INCREMENT, $value);

        return $this;
    }

    public function withFormatWidth(int $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::FORMAT_WIDTH, $value);

        return $this;
    }

    public function withSecondaryGroupingSize(int $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::SECONDARY_GROUPING_SIZE, $value);

        return $this;
    }

    public function withSignificantDigitsUsed(int $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::SIGNIFICANT_DIGITS_USED, $value);

        return $this;
    }

    public function withMinSignificantDigits(int $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::MIN_SIGNIFICANT_DIGITS, $value);

        return $this;
    }

    public function withMaxSignificantDigits(int $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::MAX_SIGNIFICANT_DIGITS, $value);

        return $this;
    }

    public function withLenientParse(int $value): self
    {
        $this->formatter->setAttribute(NumberFormatter::LENIENT_PARSE, $value);

        return $this;
    }
}
