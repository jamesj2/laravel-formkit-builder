<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Validator;

use Kozmixb\LaravelFormKitBuilder\Tests\TestCase;
use Kozmixb\LaravelFormKitBuilder\ValidationFactory;
use PHPUnit\Framework\Attributes\DataProvider;

class ExactValidationTest extends TestCase
{
    #[DataProvider('provider')]
    public function test_it_can_convert_exact_laravel_validations(string $from, string $to): void
    {
        $result = ValidationFactory::convertRule($from);

        $this->assertEquals($to, $result);
    }

    /** @return array<string, string[]> */
    public static function provider(): array
    {
        return [
            'accepted' => ['accepted', 'accepted'],
            'alpha_num' => ['alpha_num', 'alphanumeric'],
            'alpha' => ['alpha', 'alpha:latin'],
            'email' => ['email', 'email'],
            'integer' => ['integer', 'number'],
            'lowercase' => ['lowercase', 'lowercase'],
            'numeric' => ['numeric', 'number'],
            'required' => ['required', 'required'],
            'uppercase' => ['uppercase', 'uppercase'],
            'url' => ['url', 'url'],
        ];
    }
}
