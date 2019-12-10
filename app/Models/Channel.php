<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model {
    public function getPublishedChannels(){
//        $channels = Channel::latest('created_at')
//            -> where('published_flg', '=', true)
//            -> get();
        $channels = Channel::all();
        return $channels;
    }
}
