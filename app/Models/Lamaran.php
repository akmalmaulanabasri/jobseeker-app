<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;
    protected $table = 'lamarans';
    protected $fillable = [
        'posting_id',
        'user_id',
        'nama_lengkap',
        'nomor_telepon',
        'email',
        'pesan_lamaran',
    ];

    public function posting()
    {
        return $this->belongsTo(Posting::class, 'posting_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function review()
    {
        return $this->belongsTo(Review::class, 'lamaran_id', 'id');
    }



    // public function payment()
    // {
    //     return $this->hasOne(Payment::class, 'lamaran_id', 'id');
    // }
}
