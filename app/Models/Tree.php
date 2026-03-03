<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    use HasFactory;

    protected $table = 'trees';

    protected $fillable = [
        'tree_code',
        'name',
        'scientific_name',
        'type',
        'height',
        'age',
        'price',
        'status',
        'plant_date',
        'location',
        'soil_type',
        'is_fruit_tree',
        'description',
    ];

    protected $casts = [
        'plant_date' => 'date',
        'is_fruit_tree' => 'boolean',
        'price' => 'decimal:2',
    ];
}