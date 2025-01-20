<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
    protected $table = 'abouts';
    protected $fillable = [
        'email',
        'description',
        'location',
        'phone_number',
        'start_time',
        'finish_time'

    ];
}
