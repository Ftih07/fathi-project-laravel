<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'rating', 'seats', 'engine_type', 'range',
        'car_type_id', 'car_model_id', 'transmission_id', 'image_url'
    ];

    /**
     * Relasi ke model CarType
     */
    public function carType(): BelongsTo
    {
        return $this->belongsTo(CarType::class);
    }

    /**
     * Relasi ke model CarModel
     */
    public function carModel(): BelongsTo
    {
        return $this->belongsTo(CarModel::class);
    }

    /**
     * Relasi ke model Transmission
     */
    public function transmission(): BelongsTo
    {
        return $this->belongsTo(Transmission::class);
    }
}
