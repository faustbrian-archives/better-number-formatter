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

namespace Konceiver\BetterNumberFormatter;

use Konceiver\BetterNumberFormatter\Concerns\HasAttributes;
use Konceiver\BetterNumberFormatter\Concerns\HasCustomFormatters;
use Konceiver\BetterNumberFormatter\Concerns\HasFormatters;
use Konceiver\BetterNumberFormatter\Concerns\HasPadding;
use Konceiver\BetterNumberFormatter\Concerns\HasParsers;
use Konceiver\BetterNumberFormatter\Concerns\HasRounding;
use Konceiver\BetterNumberFormatter\Concerns\HasSymbol;
use Konceiver\BetterNumberFormatter\Concerns\HasTextAttributes;
use NumberFormatter;

final class BetterNumberFormatter
{
    use HasAttributes;
    use HasCustomFormatters;
    use HasFormatters;
    use HasPadding;
    use HasParsers;
    use HasRounding;
    use HasSymbol;
    use HasTextAttributes;

    private string $locale = 'en_US';

    private int $style = NumberFormatter::DECIMAL;

    private NumberFormatter $formatter;

    private function __construct(
        string $locale,
        int $style,
        array $attributes = [],
        array $textAttributes = [],
        array $symbols = []
    ) {
        $this->locale    = $locale;
        $this->style     = $style;
        $this->formatter = new NumberFormatter($locale, $style);

        foreach ($attributes as $attribute => $value) {
            $this->setAttribute($attribute, $value);
        }

        foreach ($textAttributes as $attribute => $value) {
            $this->setTextAttribute($attribute, $value);
        }

        foreach ($symbols as $symbol => $value) {
            $this->setSymbol($symbol, $value);
        }
    }

    public static function new(string $locale = 'en_US', int $style = NumberFormatter::DECIMAL): self
    {
        return new static($locale, $style);
    }

    public function withLocale(string $locale): self
    {
        return new static(
            $locale,
            $this->style,
            $this->attributes,
            $this->textAttributes,
            $this->symbols
        );
    }

    public function withStyle(int $style): self
    {
        return new static(
            $this->locale,
            $style,
            $this->attributes,
            $this->textAttributes,
            $this->symbols
        );
    }
}
