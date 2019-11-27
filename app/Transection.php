<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transection extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sheet_transections(){
        return $this->hasMany(SheetTransection::class);
    }
}
