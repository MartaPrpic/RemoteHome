<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category', 
        'type',
        'price',
        'address',
        'description',
        'images',
        'condition',
        'bedrooms',
        'bathrooms',
        'floor',
        'insidesize',
        'outsidesize',
        'additionalinfo',
        'expences'
    ];
    protected $casts = [
        'images' => 'array',
        'additionalinfo' => 'array',
        'expences' => 'array'
        ];
}
