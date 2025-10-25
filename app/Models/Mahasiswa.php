<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillabel =['id', 'nama_lengkap', 'nim', 'alamat', 'no_hp', 'email', 'status', 'created_at', 'updated_at'];
    protected $primaryKey = 'id';
    }
