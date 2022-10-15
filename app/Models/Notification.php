<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model 
{

    protected $table = 'notifications';
    public $timestamps = true;

    public function clients()
    {
        return $this->belongsToMany('App\Models\Client');
    }

}