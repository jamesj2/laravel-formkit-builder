<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Nodes;

use Kozmixb\LaravelFormKitBuilder\Nodes\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function test_it_can_return_correct_value(): void
    {
        $node = new Text('test');

        $this->assertEquals('test', $node->value());
        $this->assertEquals('type', $node->key());
    }
}
