<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayatfengshui extends Model
{

    use HasFactory;
    protected $fillable = [
        'user_id', 'jeniskelamin', 'tahun_lahir', 'kua_id', 'shio_id'
    ];
}
