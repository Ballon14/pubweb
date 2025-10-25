<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListTugas extends Model
{
    use HasFactory;
    protected $table= 'list_tugas';
    protected $fillable = ['id', 'judul', 'deskripsi', 'link', 'created_at', 'updated_at'];
    protected $primaryKey = 'id';
}
