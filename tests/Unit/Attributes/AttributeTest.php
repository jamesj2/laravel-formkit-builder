<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Attributes;

use Kozmixb\LaravelFormKitBuilder\Attributes\Attribute;
use PHPUnit\Framework\TestCase;

class AttributeTest extends TestCase
{
    public function test_it_can_return_correct_value(): void
    {
        $attribute = new Attribute('name', 'value');

        $this->assertEquals('value', $attribute->value());
        $this->assertEquals('name', $attribute->key());
    }
}
