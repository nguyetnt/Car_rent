<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rental extends Model
{
    use HasFactory;
    protected $table = 'rental';

    protected $fillable = [
        'rental_num',
        'date_rent',
        'date_return',
        'desination'
    ];

    public function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
