<?php

/**
 * Webshop model.
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
namespace Mammoth\Modules\Webshop\Models;

use Illuminate\Database\Eloquent\Model;

class Webshop extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'webshop';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
}
