<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarModel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'car_type_id'];

    /**
     * Relasi ke model CarType
     */
    public function carType(): BelongsTo
    {
        return $this->belongsTo(CarType::class);
    }

    /**
     * Relasi ke model Mobil
     */
    public function mobils(): HasMany
    {
        return $this->hasMany(Mobil::class);
    }
}
