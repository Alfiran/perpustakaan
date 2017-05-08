<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 * @package App\Domain\Entities
 */
class Book extends Entities
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'kode_buku', 'judul', 'pengarang',
    ];
 protected $primaryKey = 'id';
    
    protected $with=['users'];
    
    public function users()
    {
        return $this->belongsTo('App\Domain\Entities\User', 'user_id');
    }

}
