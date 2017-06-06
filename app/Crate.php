<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crate extends Model
{
    //
    protected $fillable = ['weekly_crate','custom_crate','custom_crate_text', 'users_id'];

    public function users(){

    		return $this->belongsTo('App\User');

    }
}
