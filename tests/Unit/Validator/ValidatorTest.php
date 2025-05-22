<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Validator;

use Illuminate\Validation\Rule;
use Kozmixb\LaravelFormKitBuilder\Tests\TestCase;
use Kozmixb\LaravelFormKitBuilder\ValidationFactory;

class ValidatorTest extends TestCase
{
    public function test_it_can_transform_array(): void
    {
        $validation = ['required', 'numeric', 'in:10,11,12'];

        $result = ValidationFactory::transform($validation);

        $this->assertEquals('required|number|is:10,11,12', $result->value());
    }

    public function test_it_can_transform_string(): void
    {
        $validation = 'required|numeric|in:10,11,12';

        $result = ValidationFactory::transform($validation);

        $this->assertEquals('required|number|is:10,11,12', $result->value());
    }

    public function it_can_drop_validations(): void
    {
        $validation = [Rule::in(['test', 'invalid']), 'required_if', 'nullable', 'array'];

        $result = ValidationFactory::transform($validation);

        $this->assertEquals('', $result->value());
    }
}
