<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Administrasi extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function pasien(): BelongsTo
    {
        return $this->belongsTo('App\Models\Pasien')->withDefault();
    }

    // Relasi ke model Dokter
    public function dokter(): BelongsTo
    {
        return $this->belongsTo('App\Models\Dokter')->withDefault();
    }
}