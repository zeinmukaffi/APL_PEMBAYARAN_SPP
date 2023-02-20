<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPP extends Model
{
    use HasFactory;
    protected $table = 'SPP';
    protected $guarded = [];

    public function siswaSPP()
    {
        return $this->hasManyThrough(Siswa::class, Pembayaran::class, 'spp_id', 'siswa_id');
    }
}
