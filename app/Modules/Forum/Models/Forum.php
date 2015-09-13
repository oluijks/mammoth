<?php

/**
 * Forum model
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

namespace Mammoth\Modules\Forum\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'forum';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
