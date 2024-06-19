<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simpan extends Model
{
    use HasFactory;
    protected $fillable = [
        'posting_id',
        'user_id'
    ];

    public function user()
    {
       return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function posting()
    {
       return $this->belongsTo(Posting::class, 'posting_id', 'id');
    }
}
