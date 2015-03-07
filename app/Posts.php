<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model

{

//    protected $fillable = [
//        'title',
//        'body',
//        'published_at'
//    ];
    protected $guarded = [];

    public function posts()
    {
        return $this->hasMany('App\Posts');
    }

}
