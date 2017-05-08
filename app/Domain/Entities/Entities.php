<?php
namespace App\Domain\Entities;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;
class Entities extends Model
{
    public $incrementing = false;
    
    /**
    * The "booting" method of the model.
    *
    * @return void
    */
    protected static function boot()
    {
        parent::boot();
        
        /**
        * Attach to the 'creating' Model Event to provide a UUID
        * for the `id` field (provided by $model->getKeyName())
        */
        static::creating(function ($model) {
            // generate id
            $model->{$model->getKeyName()} = (string)$model->generateNewId();
            
            // created_at
            $model->created_at = $model->dateNow();
            
        });
        
        static::updating(function ($model) {
            // updated_at
            $model->updated_at = $model->dateNow();
        });
    }
    
    /**
    * Generate new Uuid
    *
    * @return \Webpatser\Uuid\Uuid
    * @throws \Exception
    */
    public function generateNewId()
    {
        return Uuid::generate(4);
    }
    
    /**
    * Get Date now by Carbon
    *
    * @return static
    */
    public function dateNow()
    {
        return Carbon::now();
    }
    
}