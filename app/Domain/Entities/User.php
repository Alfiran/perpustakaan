<?php

namespace App\Domain\Entities;

use Illuminate\Notifications\Notifiable;

class User extends Entities
{
    use Notifiable;

    protected $fillable = [
        'name', 'class', 'address', 'phone', 'level',
    ];
    protected $primaryKey = 'id';
    protected $hidden = ['password'];
}
