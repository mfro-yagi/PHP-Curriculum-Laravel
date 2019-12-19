<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Channel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class ChannelsController extends Controller
{

    public function index()
    {
        // Frameworksモデルのインスタンス化
        $md = new Channel();
        // データ取得
        $data = $md->getData();

        $word =  "中田";

//        DB::table('channels')->where('title', 2)->update([
//            'public_broadcast' => true
//        ]);

//        DB::table('channels')->insert([
//            'title' => 3,
//            'broadcaster' => '埼玉テレビ',
//            'public_broadcast' => false,
//            'created_at' => now(),
//            'updated_at' => now()
//        ]);

        //DB::table('channels')->where('id', 5)->delete();

        //DB::statement('alter table channels change description broadcaster text');

        //DB::table('channels')->where('title', '=', 5)->delete();

        // ビューを返す
        return view('sites.channel.htdocs.index', compact('word','data'));

//
//        DB::table('shop')
//            ->join('item','shop.item_id', '=', 'item.item_id')
//            ->select('shop.shop_name',
//                'shop.item_id',
//                'item.item_name',
//                'item.price',
//                'shop.quantity',
//                'shop.created',
//                'shop.modified')
//            ->get();
//
//        DB::table('item') -> where('price', '>=', 5000) -> get();
//        DB::table('shop') -> whereDate('created_at', '2019-11-27') -> get();
//        DB::table('shop') -> whereDay('created_at', '27') -> get();
//        DB::table('shop') -> wheretime('created_at', '16:43:20') -> get();
//
//        DB::table('channels')->where('title', 2)->update(['published_flg' => true]);
//
//        $shinjuku = DB::table('shop')-> where('shop_name', '新宿') ->select('item_id') -> get();
//
//        DB::table('shop_b')->where('shop_name', '天王寺')->select('item_id') -> union($shinjuku) -> get();
//
//        //null判定
//        DB::table('shop_b') -> whereNull('shop_name') -> get();
//
//
//        // 取得した値をビュー「channel/index」に渡す
//        //return view('channel.index', ['channels' => $channels]);
//
//        return "Saved";
//
////        $channels = Channel::all();
////        return $channels;
    }

    //受取と保存
    public function edit(){

        $title = Input::get('title');
        $broadcaster = Input::get('broadcaster');
        $public_broadcast = Input::get('public_broadcast');

        DB::table('channels')->insert([
            'title'=>$title,
            'broadcaster'=>$broadcaster,
            'public_broadcast'=>$public_broadcast,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        return $this->index();
    }

}
