<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    protected $table='form_data';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'manager_id', 'id');
    }
}
