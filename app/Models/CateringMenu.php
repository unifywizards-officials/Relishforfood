<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CateringMenu extends Model
{
    use HasFactory;

    public function menuItems()
    {
        // return $this->hasOne(Products::class,'category_id');
        return $this->hasMany(CateringMenuItems::class, 'catering_menu_id');
    }
}
