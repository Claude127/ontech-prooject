<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class users extends Model
{
    //

    protected $fillable=[
        'name', 'lastname', 'email', 'password'
    ];

/*
     * the camera that belong to the user
     */

    public function cameras():BelongsToMany
    {
        return $this->belongsToMany(camera::class, 'camera_user','user_id','camera_id');
    }
}
