<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'title',
        'image',
        'status'
    ];
    public function Quizs()
    {
        return $this->hasMany(Quiz::class);
    }
    // public function Questions()
    // {
    //     return $this->hasMany(Question::class);
    // }
    // public function Essays()
    // {
    //     return $this->hasMany(Essay::class);
    // }
}
