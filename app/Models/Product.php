<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable;

    protected $fillable = ['name'];
    
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories', 'product_id',  'category_id');
    }

    public function attributes() 
    {
        return $this->hasMany(ProductAttribute::class);
    }

}
