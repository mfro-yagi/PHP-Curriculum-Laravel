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


        //DB::table('channels')->where('title', '=', 5)->delete();

        // ビューを返す
        return view('sites.channel.htdocs.index', compact('word','data'));
    }

    //受取と保存
    public function create(){

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

    public function edit($id)
    {
        $word =  "編集画面";

        #レコードをidで指定
        $data = DB::table('channels')->where('id', $id)->get();

        #viewに連想配列を渡す
        return view('sites.channel.htdocs.edit', compact('word','data'));
    }

    #DBの更新処理
    public function update(Request $request,$id)
    {
        $channel = DB::table('channels')->where('id', $id)->get();
        $channel->title = $request->input('title');
        $channel->broadcaster = $request->input('broadcaster');
        $channel->public_broadcast = $request->input('public_broadcast');
        $channel->updated_at = $request->input(now());
        $channel->save();
        return $this->index();
    }

}
