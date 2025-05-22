<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Nodes;

use Kozmixb\LaravelFormKitBuilder\Nodes\HtmlElement;
use PHPUnit\Framework\TestCase;

class HtmlElementTest extends TestCase
{
    public function test_it_can_return_correct_value(): void
    {
        $node = new HtmlElement('test');

        $this->assertEquals('test', $node->value());
        $this->assertEquals('$el', $node->key());
    }
}
