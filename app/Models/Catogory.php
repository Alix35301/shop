<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catogory extends Model
{
    use HasFactory;

    public function subcategories(){
        return $this->hasMany(Catogory::class, 'parent_id');
    }

    public function parent(){
        return $this->belongsTo(Catogory::class, 'parent_id');
    }
}
