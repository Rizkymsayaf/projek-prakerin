<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donasi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $with =['nama','alamat','No_Rekening','bank','nominal'];

    public $table = 'donasis';

    protected $fillable = [
        'nama',
        'alamat',
        'No_Rekening',
        'bank',
        'nominal',
    ];


    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
