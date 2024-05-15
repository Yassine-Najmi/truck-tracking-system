<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = 'chaufeurs';
    use HasFactory;

    protected $fillable = [
        'id',
        'full_name',
        'phone',
        'numero_2',
        'code',
        'adresse',
        'cnss',
        'email',
        'cni',
        'statue'
    ];
}
