<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateBook extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title',
        'writer',
        'publisher',
        'no_isbn',
        'synopsis',
        'image',
        'image_pdf',
    ];

    public function category()
    {
        return $this->belongsTo(CreateCategory::class);
    }
    
}
