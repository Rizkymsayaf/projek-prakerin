<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengasuh extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $table = 'pengasuhs ';

    protected $fillable = [
        'nama',
        'status',
        'tanggal',
    ];




public function pengguna(){
    return $this->belongsTo(User::class, 'user_id');
}
}
