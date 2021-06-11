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

trait HasTextAttributes
{
    private array $textAttributes = [];

    public function withPositivePrefix(string $value): self
    {
        return $this->setTextAttribute(NumberFormatter::POSITIVE_PREFIX, $value);
    }

    public function withPositiveSuffix(string $value): self
    {
        return $this->setTextAttribute(NumberFormatter::POSITIVE_SUFFIX, $value);
    }

    public function withNegativePrefix(string $value): self
    {
        return $this->setTextAttribute(NumberFormatter::NEGATIVE_PREFIX, $value);
    }

    public function withNegativeSuffix(string $value): self
    {
        return $this->setTextAttribute(NumberFormatter::NEGATIVE_SUFFIX, $value);
    }

    public function withPaddingCharacter(string $value): self
    {
        return $this->setTextAttribute(NumberFormatter::PADDING_CHARACTER, $value);
    }

    public function withCurrencyCode(string $value): self
    {
        return $this->setTextAttribute(NumberFormatter::CURRENCY_CODE, $value);
    }

    public function withDefaultRuleset(string $value): self
    {
        return $this->setTextAttribute(NumberFormatter::DEFAULT_RULESET, $value);
    }

    public function withPublicRulesets(string $value): self
    {
        return $this->setTextAttribute(NumberFormatter::PUBLIC_RULESETS, $value);
    }

    private function setTextAttribute(int $attribute, string $value): self
    {
        $this->formatter->setTextAttribute($attribute, $value);
        $this->textAttributes[$attribute] = $value;

        return $this;
    }
}
