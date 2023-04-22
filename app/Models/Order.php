<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';

    protected $fillable = [
        'order_name',
        'rental_id',
        'car_id',
        'customer_id',
        'admin_id',
        'order_date',
    ];

    public function reports(): HasMany
    {
        return $this->hasMany(Report::class);
    }

    public function rental(): BelongsTo
    {
        return $this->BelongsTo(Rental::class);
    }

    public function car(): BelongsTo
    {
        return $this->BelongsTo(Car::class);
    }

    public function customer(): BelongsTo
    {
        return $this->BelongsTo(Customer::class);
    }

    public function admin(): BelongsTo
    {
        return $this->BelongsTo(Admin::class);
    }
}
