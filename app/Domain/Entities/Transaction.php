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
        'book_id', 'user_id', 'petugas','status','expired_at','kode',
    ];
    protected $with=['user','book'];
    public function user()
    {
        return $this->belongsTo('App\Domain\Entities\User', 'user_id');
        
    }
    public function book()
    {
        return $this->belongsTo('App\Domain\Entities\Book', 'book_id');
        
    }

}
