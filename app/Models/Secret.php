<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secret extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'secret';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'hash';

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Indicates if the created at and updated at column are added to the table.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'hash',
        'secretText',
        'createdAt',
        'expiresAt',
        'remainingViews',
    ];
}
