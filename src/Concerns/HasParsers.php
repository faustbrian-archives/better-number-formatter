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

trait HasParsers
{
    /** @return float|false */
    public function parseWithDefault(string $value)
    {
        return $this->formatter->parse($value, NumberFormatter::TYPE_DEFAULT);
    }

    /** @return float|false */
    public function parseWithInt32(string $value)
    {
        return $this->formatter->parse($value, NumberFormatter::TYPE_INT32);
    }

    /** @return float|false */
    public function parseWithInt64(string $value)
    {
        return $this->formatter->parse($value, NumberFormatter::TYPE_INT64);
    }

    /** @return float|false */
    public function parseWithDouble(string $value)
    {
        return $this->formatter->parse($value, NumberFormatter::TYPE_DOUBLE);
    }

    /** @return float|false */
    public function parseWithCurrency(string $value)
    {
        return $this->formatter->parse($value, NumberFormatter::TYPE_CURRENCY);
    }
}
