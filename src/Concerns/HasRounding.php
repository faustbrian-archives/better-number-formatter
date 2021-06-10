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

trait HasRounding
{
    public function withCeilingRounding(): self
    {
        return $this->setAttribute(NumberFormatter::ROUNDING_MODE, NumberFormatter::ROUND_CEILING);
    }

    public function withDownRounding(): self
    {
        return $this->setAttribute(NumberFormatter::ROUNDING_MODE, NumberFormatter::ROUND_DOWN);
    }

    public function withFloorRounding(): self
    {
        return $this->setAttribute(NumberFormatter::ROUNDING_MODE, NumberFormatter::ROUND_FLOOR);
    }

    public function withHalfDownRounding(): self
    {
        return $this->setAttribute(NumberFormatter::ROUNDING_MODE, NumberFormatter::ROUND_HALFDOWN);
    }

    public function withHalfEvenRounding(): self
    {
        return $this->setAttribute(NumberFormatter::ROUNDING_MODE, NumberFormatter::ROUND_HALFEVEN);
    }

    public function withHalfUpRounding(): self
    {
        return $this->setAttribute(NumberFormatter::ROUNDING_MODE, NumberFormatter::ROUND_HALFUP);
    }

    public function withUpRounding(): self
    {
        return $this->setAttribute(NumberFormatter::ROUNDING_MODE, NumberFormatter::ROUND_UP);
    }
}
