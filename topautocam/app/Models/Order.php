<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "order";

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
