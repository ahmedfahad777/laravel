<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Newtimeline extends Model
{

//    protected $fillable = [
//        'title',
//        'body',
//        'published_at'
//    ];
protected $guarded = [];

    public function newtimeline()
    {
        return $this->hasMany('App\Newtimeline');
    }

}
