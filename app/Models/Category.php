<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'stype_name'
    ];
    public function product()
    {
        return $this->belongsTo(Category::class);
    }
}
