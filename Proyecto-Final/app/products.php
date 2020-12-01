<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public function categories(){
        return $this->belongsTo(categories::class);
    }
}
