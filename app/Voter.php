<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model {

    protected $guarded = [];

    public function voters()
    {
        return $this->hasMany('App\Voter');
    }
}
