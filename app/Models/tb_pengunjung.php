<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pengunjung extends Model
{
    use HasFactory;
    protected $table = 'tb_pengunjung';
    protected $primaryKey = 'id_pengunjung';
}
