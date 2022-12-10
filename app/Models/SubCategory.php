<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class SubCategory extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category_id',
        'name_en',
        'name_hin',
        'slug_en',
        'slug_hin',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
