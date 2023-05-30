<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    // use HasFactory;
    protected $table = 'menus';
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'image',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function orderMenu()
    {
        // return $this->belongsToMany(OrderMenu::class);
        return $this->hasMany(OrderMenu::class);
    }
}
