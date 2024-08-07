<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $fillable = [
        'quiz_id',
        'question',
        'option_1',
        'option_2',
        'option_3',
        'option_4',
        'answer',
    ];

    public function Quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
