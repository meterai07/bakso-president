<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMenu extends Model
{
    // use HasFactory;

    protected $table = "order_menus";

    protected $fillable = [
        'transaction_id',
        'menu_id',
        'quantity',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function menu()
    {
        // return $this->belongsToMany(Menu::class);
        return $this->belongsTo(Menu::class);
    }
}
