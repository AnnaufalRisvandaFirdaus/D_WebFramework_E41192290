<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PenggunaModel extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $fillable = [
        'id',
        'nama',
        'level',
        'email',
    ];
}
