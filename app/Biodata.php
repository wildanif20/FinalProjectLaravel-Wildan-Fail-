<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Biodata extends Model
{
    protected $fillable = [
        'tempat_lahir', 'alamat', 'pendidikan_terakhir', 'foto'
    ];

    public function users()
    { 
        return $this->belongsTo(User::class);
    }
}
