<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class comment_forum extends Model
{
    Public function Forum()
    {
        return $this->bleongTo('App\Model\user\forum');
    }
}
