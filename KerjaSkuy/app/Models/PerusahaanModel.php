<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PerusahaanModel extends Model
{
    use HasFactory;
    protected $table = "perusahaan";
    protected $fillable = [
        'id_perusahaan',
        'no',
        'nama_perusahaan',
        'pekerjaan',
        'gaji',
        'alamat_perusahaan',
        'syarat_ketentuan',
        'kontak',
        'foto_perusahaan',
    ];
}