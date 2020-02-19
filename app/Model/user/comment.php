<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    Public function Post()
    {
        return $this->bleongTo('App\Model\user\post');
    }
}
