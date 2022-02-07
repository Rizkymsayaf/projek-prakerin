<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory;
    use HasFactory;

    protected $guarded = ['id'];
    protected $with =['donasi'];

    // public $table = 'pengasuhs';

    // protected $fillable = [
    //     'nama',
    //     'status',
    //     'tanggal',
    // ];




public function donasi(){
    return $this->belongsTo(User::class, 'user_id');
}
}
