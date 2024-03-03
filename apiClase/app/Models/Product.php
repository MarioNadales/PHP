<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    protected $fillable = ["nombre", "descripcion"];

    protected $hidden = ["created_at", "updated_at"];

    //protected $table = "nuevoNombre";
}
