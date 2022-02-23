<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_role_pengguna extends Model
{
    use HasFactory;
    protected $table = 'tb_role_pengguna';
    protected $primaryKey = 'id_role_pengguna';
}
