<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'lamaran_id',
        'nominal',
        'status'
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id', 'id');
    // }

    // public function lamaran()
    // {
    //     return $this->belongsTo(Lamaran::class, 'lamaran_id', 'id');
    // }
}
