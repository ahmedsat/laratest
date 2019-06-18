<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = array('url', 'title', 'description','content','blog','created_at_ip', 'updated_at_ip');
}
