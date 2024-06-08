<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petisi extends Model
{
    use HasFactory;

    protected $table = 'petisi';

    protected $fillable = [
        'judul', 'deskripsi', 'status'
    ];
}
