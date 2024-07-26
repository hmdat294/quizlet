<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Essay extends Model
{
    use HasFactory;

    protected $fillable = ['quiz_id', 'question', 'blanks', 'level'];

    public function Quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
