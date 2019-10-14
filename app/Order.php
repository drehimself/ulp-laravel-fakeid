<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Propaganistas\LaravelFakeId\RoutesWithFakeIds;

class Order extends Model
{
    use RoutesWithFakeIds;

    protected $appends = ['fake_id'];

    public function getFakeIdAttribute()
    {
        return $this->getRouteKey();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
