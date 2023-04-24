<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
 use HasFactory;
 protected $table = 'car';

 protected $fillable = [
  'car_number',
  'car_model',
  'car_status',
  'car_price',
  'img_url'
 ];

 public function order(): HasMany
 {
  return $this->hasMany(Order::class);
 }
}
