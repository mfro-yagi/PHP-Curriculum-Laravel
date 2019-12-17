<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Channel extends Model {

    protected $table = 'channels';

    protected $guarded = array('id');

    public $timestamps = false;

    public function getData(){
//        $channels = Channel::latest('created_at')
//            -> where('published_flg', '=', true)
//            -> get();
       // $channels = Channel::all();
        $channels = DB::table($this->table)->get();
        return $channels;
    }
}
