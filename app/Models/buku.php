<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class buku extends Model
{
    protected $table ="bukus"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel bukus
    public $timestamps= false;
    protected $primaryKey ='kode_buku'; // Memanggil isi DB Dengan primarykey
    public $incrementing = false;
    protected $fillable = [
        'kode_buku',
        'judul',
        'pengarang',
        'jenis_buku',
        'harga',
        'qty',
    ];
}
