<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SheetTransection extends Model
{
    public function transection(){
        return $this->belongsTo(Transection::class);
    }

    public function sheet(){
        return $this->belongsTo(Sheet::class);
    }
}
