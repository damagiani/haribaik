<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayatwariga extends Model
{
    // public $timestamps = false;

    public function caturbekel()
    {
        return $this->belongsTo('App\Models\Caturbekel');

    }

    // public function dauh()
    // {
    //     return $this->belongsTo('App\Models\Dauh');

    // }
    // public function user()
    // {
    //     return $this->belongsTo('App\Models\User');

    // }

    use HasFactory;
    protected $fillable = [
        'user_id', 'tanggal_lahir', 'tanggal_pilihan', 'caturbekel_id', 'dauh_id', 'pangarasan_id', 'pancasudha_id', 'berpergian_id', 'sandangpangan_id'
    ];
}