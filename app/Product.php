<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product';

    /* Primary key of the table. */
    protected $primaryKey = 'product_id';
}
