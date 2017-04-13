<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 * @package App\Domain\Entities
 */
class Transaction extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'book_id', 'user_id', 'petugas','status','expired_at',
    ];

}
