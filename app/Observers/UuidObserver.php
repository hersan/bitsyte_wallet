<?php
/**
 * Created by PhpStorm.
 * User: Herminio
 * Date: 04/09/2017
 * Time: 16:07
 */

namespace App\Observers;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;

class UuidObserver
{
    /**
     * Generate UUID. this is used in resource controller
     *
     * @param Model $model
     */
    public function creating(Model $model)
    {
        if (empty($model->uuid)) {
            $model->uuid = Uuid::uuid4();
        }
    }
}