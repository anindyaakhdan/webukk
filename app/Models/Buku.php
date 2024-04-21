<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = "buku";
    // protected $primarykey = "id_buku";
    protected $guarded = [];
    protected $fillable = [ 'id_buku','kategori','nama_buku','penerbit'] ;

    public function kategori() {
        return $this->belongsTo(Kategori::class);
    }
}
