<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoldItem extends Model
{
    use HasFactory;

    protected $table = 'sold_item';
    protected $fillable = [
        'sale_id', 'description', 'department', 'price'
    ];
}
