<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'author' => new AuthorResource($this->author),
            'categories' => CategoryResource::collection($this->categories),
            'cost' => $this->cost,
            'year' => $this->year,
            'isbn' => $this->isbn,
            'published_at' => $this->published_at,
        ];
    }
}
