<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_menu extends Model
{
    use HasFactory;
    protected $table = 'tb_menu';
    protected $primaryKey = 'id_menu';
}
