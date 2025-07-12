<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bku extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'bku';  // menggunakan tabel bku

    // fungsi untuk mengisi data yang boleh masuk ke database
    public $fillable = [
        'nomorbukti',
        'nomorkode',
        'hari',
        'pelunasan',
        'pembelian',
        'uraian',
        'jumlah',
        'terbilang'
    ];

    public function scopeActive($query)
    {
        return $query->where('active', 'true');
    }

    // menambah komentar mengambil data dari model Comment
    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }

    // menambahkan total komentar
    // public function total_comments()
    // {
    //     return $this->comments()->count();
    // }
}
