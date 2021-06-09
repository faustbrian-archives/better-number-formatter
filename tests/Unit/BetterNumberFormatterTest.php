<?php

declare(strict_types=1);

use Konceiver\BetterNumberFormatter\BetterNumberFormatter;

it('should format custom currency thousands with a comma', function (): void {
    $instance = BetterNumberFormatter::new();

    expect($instance->formatWithCurrencyCustom('1,000', 'USD', 2))->toBe('1,000 USD');
    expect($instance->formatWithCurrencyCustom('1,000.00', 'USD', 2))->toBe('1,000.00 USD');
    expect($instance->formatWithCurrencyCustom('1,234.56', 'USD', 2))->toBe('1,234.56 USD');
});

it('should format custom currency thousands with a period', function (): void {
    $instance = BetterNumberFormatter::new();

    expect($instance->formatWithCurrencyCustom('1.000', 'USD', 2))->toBe('1.000 USD');
    expect($instance->formatWithCurrencyCustom('1.000,00', 'USD', 2))->toBe('1.000,00 USD');
    expect($instance->formatWithCurrencyCustom('1.234,56', 'USD', 2))->toBe('1.234,56 USD');
});
