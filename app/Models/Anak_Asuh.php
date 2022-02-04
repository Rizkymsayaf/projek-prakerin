<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak_Asuh extends Model
{
    use HasFactory;
    protected $guarded = ['nama','umur','tanggal_lahir'];
    public $table = 'anak_asuhs';

    protected $fillable = [
        'nama',
        'umur',
        'tanggal_lahir',
    ];
}
