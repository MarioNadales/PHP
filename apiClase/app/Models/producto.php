<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class producto extends Model
{
    use HasFactory;
    //protected $guarded = [];

    protected $fillable = ["nombre", "descripcion"];

    protected $hidden = ["created_at", "updated_at"];



public function categoria(): BelongsToMany {
    
    return $this->BelongsToMany(categoria::class,"_producto__categoria", "producto_id", "categoria_id");
}
}
