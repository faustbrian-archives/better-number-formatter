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
        $this->formatter->setAttribute(NumberFormatter::ROUNDING_MODE, NumberFormatter::ROUND_CEILING);

        return $this;
    }

    public function withDownRounding(): self
    {
        $this->formatter->setAttribute(NumberFormatter::ROUNDING_MODE, NumberFormatter::ROUND_DOWN);

        return $this;
    }

    public function withFloorRounding(): self
    {
        $this->formatter->setAttribute(NumberFormatter::ROUNDING_MODE, NumberFormatter::ROUND_FLOOR);

        return $this;
    }

    public function withHalfDownRounding(): self
    {
        $this->formatter->setAttribute(NumberFormatter::ROUNDING_MODE, NumberFormatter::ROUND_HALFDOWN);

        return $this;
    }

    public function withHalfEvenRounding(): self
    {
        $this->formatter->setAttribute(NumberFormatter::ROUNDING_MODE, NumberFormatter::ROUND_HALFEVEN);

        return $this;
    }

    public function withHalfUpRounding(): self
    {
        $this->formatter->setAttribute(NumberFormatter::ROUNDING_MODE, NumberFormatter::ROUND_HALFUP);

        return $this;
    }

    public function withUpRounding(): self
    {
        $this->formatter->setAttribute(NumberFormatter::ROUNDING_MODE, NumberFormatter::ROUND_UP);

        return $this;
    }
}
