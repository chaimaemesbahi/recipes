<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class procedure extends Model
{
    use HasFactory;
    protected $fillable = [
        'number' , 
        'procedure' , 
        'recipe_id'
    ];
}
