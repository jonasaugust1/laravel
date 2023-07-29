<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function getBooks(){
        return $this->belongsToMany('App\Models\Book', 'books_tags', 'tags_id', 'books_id');
    }
}
