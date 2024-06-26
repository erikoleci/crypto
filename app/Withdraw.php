<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    //

    public function account(){
        return $this->belongsTo('App\Account', 'credit_card_id', 'id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id' , 'id');
    }
}
