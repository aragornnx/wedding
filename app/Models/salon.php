<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'location'];

    /**
     * Get the contracts for the salon.
     */
    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }
}
