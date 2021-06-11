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
        return $this->setAttribute(NumberFormatter::PADDING_POSITION, NumberFormatter::PAD_AFTER_PREFIX);
    }

    public function withPaddingAfterSuffix(): self
    {
        return $this->setAttribute(NumberFormatter::PADDING_POSITION, NumberFormatter::PAD_AFTER_SUFFIX);
    }

    public function withPaddingBeforePrefix(): self
    {
        return $this->setAttribute(NumberFormatter::PADDING_POSITION, NumberFormatter::PAD_BEFORE_PREFIX);
    }

    public function withPaddingBeforeSuffix(): self
    {
        return $this->setAttribute(NumberFormatter::PADDING_POSITION, NumberFormatter::PAD_BEFORE_SUFFIX);
    }
}
