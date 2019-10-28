<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class OwnSheet extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sheet(){
        return $this->belongsTo(Sheet::class);
    }
}
