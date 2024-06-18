<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;
    protected $table = 'postings';
    protected $guarded = ['id'];

    public function lamaran()
    {
        return $this->hasMany(Lamaran::class, 'posting_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function review()
    {
        return $this->hasMany(Review::class, 'posting_id', 'id');
    }
}
