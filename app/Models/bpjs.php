<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bpjs extends Model
{
    use HasFactory;

    protected $table = 'bpjs';

    // jika error ganti menjadi ""
    protected $fillable = [
        'no',
        'kelas',
        'harga'
    ];

    public $timestamps = false;
}
