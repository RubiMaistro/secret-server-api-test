<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secret extends Model
{
    protected $table = 'secret';
    protected $primaryKey = 'hash';
    protected $fillable = [
        'hash', 'secretText', 'createdAt', 'expiresAt', 'remainingViews'
    ];
}
