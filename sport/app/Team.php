<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players()
	{
	    return $this->hasMany('App\Player');
	}
	public function country()
	{
	    return $this->belongsTo('App\Country');
	}
	public function stats()
	{
	    return $this->hasOne('App\Stats_team', 'id_team');
	}
}
