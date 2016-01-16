<?php

/**
 * Search model.
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
namespace Mammoth\Modules\Search\Models;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = '';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
}
