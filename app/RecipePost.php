<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Http\Controllers\RecipesController;
// use \Carbon\Carbon;

class RecipePost extends Model
{
    //
    protected $fillable = ['title','content','image', 'users_id'];

    public function users(){

    		return $this->belongsTo('App\User');

    }
}
