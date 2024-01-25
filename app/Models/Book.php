<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function author()
    {
        //many-to-many relation
        return $this->belongsToMany(Author::class); //defining relation with Author model
    }
}
