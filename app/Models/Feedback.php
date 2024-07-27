<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table ="feedback";
    protected $fillable = [
        'result_id',
        'user_id',
        'quiz_id',
        'content',
        'star'
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
