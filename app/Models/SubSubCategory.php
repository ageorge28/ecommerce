<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\SubCategory;

class SubSubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'name_en',
        'name_hin',
        'slug_en',
        'slug_hin',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function SubCategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id', 'id');
    }
}
