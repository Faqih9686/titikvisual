<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'icon', 'is_featured'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected $casts = [
        'features' => 'array',
    ];

    public function packages()
    {
        return $this->hasMany(Pack::class);
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'category_id', 'category_id');
    }
}
