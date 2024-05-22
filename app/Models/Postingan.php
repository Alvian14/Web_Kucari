<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    protected $table = 'postingan'; // Nama tabel sesuai dengan struktur
    // protected $primaryKey = 'id_postingan'; // Nama kolom primary key
    public $timestamps = false; // Tidak ada kolom created_at dan updated_at

    // Mass assignable properties
    protected $guarded = ['id_postingan'];

    /**
     * Mendefinisikan relasi 'belongsTo' dengan model 'User'.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
