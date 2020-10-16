<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    public function create_post($title,$body){
        $this->title=$title;
        $this->body=$body;
        $this->save();
    }
    //
}
