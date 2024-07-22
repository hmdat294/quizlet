<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Essay extends Model
{
    use HasFactory;

    protected $fillable = ['quiz_id', 'question', 'blanks'];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    // Phương thức để lưu và trích xuất các blanks
    // public function setBlanksAttribute($value)
    // {
    //     $this->attributes['blanks'] = implode(',', $value);
    // }

    // public function getBlanksAttribute($value)
    // {
    //     return explode(',', $value);
    // }
}
