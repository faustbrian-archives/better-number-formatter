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

trait HasPadding
{
    public function withPaddingAfterPrefix(): self
    {
        $this->formatter->setAttribute(NumberFormatter::PADDING_POSITION, NumberFormatter::PAD_AFTER_PREFIX);

        return $this;
    }

    public function withPaddingAfterSuffix(): self
    {
        $this->formatter->setAttribute(NumberFormatter::PADDING_POSITION, NumberFormatter::PAD_AFTER_SUFFIX);

        return $this;
    }

    public function withPaddingBeforePrefix(): self
    {
        $this->formatter->setAttribute(NumberFormatter::PADDING_POSITION, NumberFormatter::PAD_BEFORE_PREFIX);

        return $this;
    }

    public function withPaddingBeforeSuffix(): self
    {
        $this->formatter->setAttribute(NumberFormatter::PADDING_POSITION, NumberFormatter::PAD_BEFORE_SUFFIX);

        return $this;
    }
}
