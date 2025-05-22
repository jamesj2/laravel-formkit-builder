<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Nodes;

use Kozmixb\LaravelFormKitBuilder\Nodes\Component;
use PHPUnit\Framework\TestCase;

class ComponentTest extends TestCase
{
    public function test_it_can_return_correct_value(): void
    {
        $node = new Component('test');

        $this->assertEquals('test', $node->value());
        $this->assertEquals('$cmp', $node->key());
    }
}
