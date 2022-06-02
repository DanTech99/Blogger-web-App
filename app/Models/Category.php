<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //asignacion masiva
    protected $fillable = ['name', 'slug'];

    //relacion uno a muchos
    public function getRouteKeyName(){
        return 'slug';
    }


    public function posts(){
        return $this->hasMany(Post::class);
    }
}
