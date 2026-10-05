<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CateringMenuItems extends Model
{
    use HasFactory;


    public function catering_menu()
    {
        return $this->hasOne(CateringMenu::class, 'id', 'catering_menu_id');
    }
}
