<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public function book()
    {
        //many-to-many relationship
        return $this->belongsToMany(Book::class); //defining relation with book model
    }
}
