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
}
