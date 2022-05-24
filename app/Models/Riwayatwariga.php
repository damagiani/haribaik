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

    public function dauh()
    {
        return $this->belongsTo('App\Models\Dauh');

    }

    use HasFactory;
    protected $fillable = [
        'nama', 'tanggal_lahir', 'tanggal_pilihan', 'caturbekel_id', 'dauh_id'
    ];
}