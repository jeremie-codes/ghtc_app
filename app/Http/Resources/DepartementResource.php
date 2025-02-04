<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DepartementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'titre' => $this->titre,
            'description' => $this->description,
            'image' => $this->image,
            'created_at' => $this->created_at->format('d/m/Y'), // Formatage de la date
        ];
    }

    
}