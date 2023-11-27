<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matelas extends Model
{
    use HasFactory;

    public function marques()
    {
        return $this->belongsTo(Marque::class, 'marque_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
   

}