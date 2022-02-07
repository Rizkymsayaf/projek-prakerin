<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebutuhan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $with =['nama','alamat','No_Rekening','bank','nominal'];

    public $table = 'kebutuhans';

    protected $fillable = [
        'nama_barang',
        'jumlah_barang',
        'harga_barang',
    ];
}
