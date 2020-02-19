<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
	public function tags()
	{
		return $this->belongToMany('App\Model\user\tag', 'post_tag')->withTimestamps();
	}

    public function getRouteKeyName()
    {
    	return 'title';
    }

    public function Comment()
    {
        return $this->blengTo('App\Model\user\comment');
    }
}
