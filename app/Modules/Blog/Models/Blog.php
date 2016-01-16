<?php

/**
 * Blog model.
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
namespace Mammoth\Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blog';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'title', 'excerpt', 'body'];
}
