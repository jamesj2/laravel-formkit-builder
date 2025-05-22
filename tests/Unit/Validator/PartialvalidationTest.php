<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Validator;

use Kozmixb\LaravelFormKitBuilder\Tests\TestCase;
use Kozmixb\LaravelFormKitBuilder\ValidationFactory;
use PHPUnit\Framework\Attributes\DataProvider;

class PartialValidationTest extends TestCase
{
    #[DataProvider('provider')]
    public function test_it_can_convert_partial_laravel_validations(string $from, string $to): void
    {
        $result = ValidationFactory::convertRule($from);

        $this->assertEquals($to, $result);
    }

    /** @return array<string, string[]> */
    public static function provider(): array
    {
        return [
            'between:' => ['between:apple,pearl', 'between:apple,pearl'],
            'date_format:' => ['date_format:Y-m-d', 'date_format:Y-m-d'],
            'ends_with:' => ['ends_with:.php', 'ends_with:.php'],
            'in:' => ['in:method,class', 'is:method,class'],
            'max:' => ['max:39', 'max:39'],
            'min:' => ['min:10', 'min:10'],
            'regex:' => ['regex:/a-zA-z/', 'matches:/a-zA-z/'],
            'size:' => ['size:11', 'length:11'],
            'starts_with:' => ['starts_with:abc', 'starts_with:abc'],
        ];
    }
}
