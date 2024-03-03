<?php

namespace App\Http\Resources;

use App\Models\Tarea;
use App\Models\Etiqueta;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TareaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        
        return [
            'id' => $this->id,
            'titulo' => $this->titulo,
            'descripcion' =>$this->descripcion,
            'etiqueta' =>  $this->etiqueta->pluck('nombre')
        ];
    }
}
