<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transmission extends Model
{
    use HasFactory;

    protected $fillable = ['type'];

    /**
     * Relasi ke model Mobil
     */
    public function mobils(): HasMany
    {
        return $this->hasMany(Mobil::class);
    }
}
