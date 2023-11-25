<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';

    protected $fillable = [
        'street_address',
        'u_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'u_id', 'id');
    }

}
