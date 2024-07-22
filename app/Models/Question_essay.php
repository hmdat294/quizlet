<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question_essay extends Model
{
    use HasFactory;
    protected $table ="questions_essay";
    protected $fillable = [
        'quiz_id'
    ];

    public function Quiz()
    {
        return $this->belongsTo(Category::class);
    }
}
