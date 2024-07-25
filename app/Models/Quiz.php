<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $table ="quizs";
    protected $fillable = [
        'category_id',
        'title',
        'duration',
        'type',
        'level',
        'description'
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function Questions()
    {
        return $this->hasMany(Question::class);
    }
}
