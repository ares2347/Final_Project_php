<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $fillable = [
        "title",
        "image",
        "description"
    ];

    public function Products(){
        return $this -> hasMany(Product::class);
    }
}