<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'parent_id', 'description'];

    public function parent(){
        return $this->hasMany(Category::class, 'parent_id')->with('parent');
    }
}