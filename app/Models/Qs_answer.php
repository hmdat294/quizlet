<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qs_answer extends Model
{
    use HasFactory;
    protected $table ="qs_answer";
    protected $fillable = [
        'question',
        'answer'
    ];

    public function Question_essay()
    {
        return $this->belongsTo(Category::class);
    }
}
