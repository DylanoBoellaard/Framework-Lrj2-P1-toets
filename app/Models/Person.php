<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'persons';

    protected $fillable = [
        'id',
        'name',
        'street',
        'house_nr',
        'zipcode',
        'city',
        'phone_nr'
    ];
}
