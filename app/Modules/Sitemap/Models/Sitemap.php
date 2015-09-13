<?php

/**
 * Sitemap model
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

namespace Mammoth\Modules\Sitemap\Models;

use Illuminate\Database\Eloquent\Model;

class Sitemap extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sitemap';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
