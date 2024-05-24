<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusan';
    protected $guarded = ['id'];

    public $timestamps = false;

    public function siswa()
    {
        return $this->hasMany(Peserta::class, 'jurusan_id');
    }
    public function bobot()
    {
        return $this->hasMany(Bobot::class, 'jurusan_id');
    }
}
