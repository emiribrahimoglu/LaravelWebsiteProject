<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kullanici extends Model
{
    use HasFactory;
    protected $table = 'kullanici';
    protected $primaryKey = 'kullanici_id';
    public $timestamps = false;

    protected $fillable = [
        'kullanici_isim', 'kullanici_soyisim','kullanici_takmaAd', 'kullanici_mail', 'kullanici_adres', 'kullanici_telNo', 'kullanici_sifre',
    ];
    protected $hidden = [
        'kullanici_sifre'
    ];
}
