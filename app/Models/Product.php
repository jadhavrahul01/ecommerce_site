<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category',
        'price',
        'preview_img',
        'custstar',
        'stype_name',
        'slug',
        'pservices_id',

    ];
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
