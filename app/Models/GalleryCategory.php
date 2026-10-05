<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    use HasFactory;


    public function product()
    {
        // return $this->hasOne(Products::class,'category_id');
        return $this->hasMany(GalleryImages::class, 'gallery_categories_id');
    }
}
