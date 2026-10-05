<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImages extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->hasOne(GalleryCategory::class, 'id', 'gallery_categories_id');
    }
}
