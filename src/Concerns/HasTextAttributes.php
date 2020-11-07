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
    public function withPositivePrefix(string $value): self
    {
        $this->formatter->setTextAttribute(NumberFormatter::POSITIVE_PREFIX, $value);

        return $this;
    }

    public function withPositiveSuffix(string $value): self
    {
        $this->formatter->setTextAttribute(NumberFormatter::POSITIVE_SUFFIX, $value);

        return $this;
    }

    public function withNegativePrefix(string $value): self
    {
        $this->formatter->setTextAttribute(NumberFormatter::NEGATIVE_PREFIX, $value);

        return $this;
    }

    public function withNegativeSuffix(string $value): self
    {
        $this->formatter->setTextAttribute(NumberFormatter::NEGATIVE_SUFFIX, $value);

        return $this;
    }

    public function withPaddingCharacter(string $value): self
    {
        $this->formatter->setTextAttribute(NumberFormatter::PADDING_CHARACTER, $value);

        return $this;
    }

    public function withCurrencyCode(string $value): self
    {
        $this->formatter->setTextAttribute(NumberFormatter::CURRENCY_CODE, $value);

        return $this;
    }

    public function withDefaultRuleset(string $value): self
    {
        $this->formatter->setTextAttribute(NumberFormatter::DEFAULT_RULESET, $value);

        return $this;
    }

    public function withPublicRulesets(string $value): self
    {
        $this->formatter->setTextAttribute(NumberFormatter::PUBLIC_RULESETS, $value);

        return $this;
    }
}
