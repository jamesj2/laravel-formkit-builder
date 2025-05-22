<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Attributes;

use Kozmixb\LaravelFormKitBuilder\Attributes\Accepts;
use PHPUnit\Framework\TestCase;

class AcceptsTest extends TestCase
{
    public function test_it_can_return_correct_value(): void
    {
        $attribute = new Accepts(['pdf', 'txt', 'jpg']);

        $this->assertEquals('.pdf,.txt,.jpg', $attribute->value());
        $this->assertEquals('accepts', $attribute->key());
    }
}
