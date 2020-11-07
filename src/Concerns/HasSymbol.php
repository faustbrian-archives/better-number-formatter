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

trait HasSymbol
{
    public function withDecimalSeparatorSymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::DECIMAL_SEPARATOR_SYMBOL, $value);

        return $this;
    }

    public function withGroupingSeparatorSymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::GROUPING_SEPARATOR_SYMBOL, $value);

        return $this;
    }

    public function withPatternSeparatorSymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::PATTERN_SEPARATOR_SYMBOL, $value);

        return $this;
    }

    public function withPercentSymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::PERCENT_SYMBOL, $value);

        return $this;
    }

    public function withZeroDigitSymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::ZERO_DIGIT_SYMBOL, $value);

        return $this;
    }

    public function withDigitSymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::DIGIT_SYMBOL, $value);

        return $this;
    }

    public function withMinusSignSymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::MINUS_SIGN_SYMBOL, $value);

        return $this;
    }

    public function withPlusSignSymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::PLUS_SIGN_SYMBOL, $value);

        return $this;
    }

    public function withCurrencySymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::CURRENCY_SYMBOL, $value);

        return $this;
    }

    public function withIntlCurrencySymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::INTL_CURRENCY_SYMBOL, $value);

        return $this;
    }

    public function withMonetarySeparatorSymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::MONETARY_SEPARATOR_SYMBOL, $value);

        return $this;
    }

    public function withExponentialSymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::EXPONENTIAL_SYMBOL, $value);

        return $this;
    }

    public function withPermillSymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::PERMILL_SYMBOL, $value);

        return $this;
    }

    public function withPadEscapeSymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::PAD_ESCAPE_SYMBOL, $value);

        return $this;
    }

    public function withInfinitySymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::INFINITY_SYMBOL, $value);

        return $this;
    }

    public function withNanSymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::NAN_SYMBOL, $value);

        return $this;
    }

    public function withSignificantDigitSymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::SIGNIFICANT_DIGIT_SYMBOL, $value);

        return $this;
    }

    public function withMonetaryGroupingSeparatorSymbol(string $value): self
    {
        $this->formatter->setSymbol(NumberFormatter::MONETARY_GROUPING_SEPARATOR_SYMBOL, $value);

        return $this;
    }
}
