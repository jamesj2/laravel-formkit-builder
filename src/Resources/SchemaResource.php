<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Kozmixb\LaravelFormKitBuilder\Form\Schema;

class SchemaResource extends JsonResource
{
    /** @var Schema */
    public $resource;

    public function __construct(Schema $resource)
    {
        $this->resource = $resource;
    }

    /**
     * @SuppressWarnings("unused")
     * @return array<mixed>
     */
    public function toArray(Request $request): array
    {
        return [];
    }
}
