<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman_Kerja extends Model
{
    use HasFactory;
    protected $table = 'pengalaman__kerjas';
    protected $fillable = [
        'user_id',
        'start_date',
        'end_date',
        'company_name',
        'description'
    ];
}
