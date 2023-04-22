<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Model
{
    use HasFactory;
    protected $table  = 'admin';

    protected $fillable = [
        'fname',
        'lname',
        'gender',
        'age',
        'email',
    ];
    
    public function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
