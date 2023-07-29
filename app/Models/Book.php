<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    //Para permitir registros em massa via Tinker - App\Models\Book::create(["title"=>"Novo Livro", "description"=>"desc novo livro"]);
    protected $fillable = ['title', 'description'];
    public function getBooks(){
        return $this->all();
    }
    public function getTags(){
        return $this->belongsToMany('App\Models\Tag', 'books_tags', 'books_id', 'tags_id');
    }
    public function addTag(Tag $tag){
        return $this->getTags()->save($tag);
    }
}
