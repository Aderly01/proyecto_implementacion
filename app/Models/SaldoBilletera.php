<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaldoBilletera extends Model
{
    use HasFactory;

    protected $table = 'saldo_billetera';
    protected $fillable = [
        'SALDO_BILLETERA'
    ];
    const CREATED_AT = false;
    const UPDATED_AT = false;
}

