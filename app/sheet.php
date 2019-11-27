<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sheet extends Model
{
    use SoftDeletes;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function own_sheets(){
        return $this->hasMany(OwnSheet::class);
    }

    public function sheet_transections(){
        return $this->hasMany(SheetTransection::class);
    }
}
