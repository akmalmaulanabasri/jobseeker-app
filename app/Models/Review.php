<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'posting_id',
        'rating',
        'comment'
    ];

    public function lamaran()
    {
        return $this->belongsTo(Lamaran::class, 'lamaran_id', 'id');
    }
}
