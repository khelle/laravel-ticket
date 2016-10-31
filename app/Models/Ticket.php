<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /**
     * @var string
     */
    protected $table = 'tickets';

    /**
     * @var string[]
     */
    protected $fillable = [
        'unique_id',
        'fname',
        'lname',
        'email'
    ];
}
