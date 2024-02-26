<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    protected $fillable = ['name' , 'description' , 'category_id'];
    use HasFactory;

    public function category()
    {
        return $this->hasOne(CropCategory::class);
    }
}
