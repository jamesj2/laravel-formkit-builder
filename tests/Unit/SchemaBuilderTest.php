<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit;

use Kozmixb\LaravelFormKitBuilder\Contracts\FormInterface;
use Kozmixb\LaravelFormKitBuilder\FormSchemaBuilder;
use Kozmixb\LaravelFormKitBuilder\Tests\TestCase;

class SchemaBuilderTest extends TestCase
{
    public function test_it_can_build_schema(): void
    {
        $result = (new FormSchemaBuilder())->build($this->getForm());

        $this->assertEquals([
            [
                '$formkit' => 'text',
                'name' => 'name',
                'label' => 'Full Name',
                'validation' => 'required'
            ],
            [
                '$formkit' => 'password',
                'name' => 'password',
                'label' => 'Password',
                'validation' => 'required|min:6',
            ],
        ], $result->toArray());
    }

    protected function getForm(): FormInterface
    {
        return new class implements FormInterface {

            /** @return array<string, string> */
            public function rules(): array
            {
                return [
                    'name' => 'required|string',
                    'password' => 'required|min:6'
                ];
            }

            /** @return array<string, string> */
            public function labels(): array
            {
                return [
                    'name' => 'Full Name',
                ];
            }

            /** @return array<string, string> */
            public function casts(): array
            {
                return [];
            }
        };
    }
}
