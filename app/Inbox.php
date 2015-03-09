<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inbox extends Model {

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function inboxes()
    {
        return $this->hasMany('App\Inbox');
    }
}
