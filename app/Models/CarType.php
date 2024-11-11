<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Relasi ke model CarModel
     */
    public function carModels(): HasMany
    {
        return $this->hasMany(CarModel::class);
    }
}
