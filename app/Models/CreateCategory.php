<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
    ];

    public function book()
    {
        return $this->hasMany(CreateBook::class);
    }
}
