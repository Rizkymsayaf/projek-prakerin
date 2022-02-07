<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public $table = 'anaks';

    protected $fillable = [
        'nama',
        'umur',
        'tanggal_lahir',
        'image',
    ];

}
