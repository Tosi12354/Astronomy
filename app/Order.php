<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $name
 * @property int $email
 * @property string $created_at
 * @property string $updated_at
 */
class Order extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $table = 'orders';
    protected $fillable = ['name', 'email', 'created_at', 'updated_at'];

}
