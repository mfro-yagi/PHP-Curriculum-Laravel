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


        //絞り込み（In節）　whereNotInで逆
        //$data = $md->whereIn('title', [2, 5, 9])->get();

        //null判定　今回の場合全部記述されない
        //$data = $md->whereNull('title')->get();

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

        return view('sites.channel.htdocs.complete', compact('word'));
    }

    public function edit($id)
    {
        $word =  "編集画面";

        #レコードをidで指定
        $data = DB::table('channels')->where('id', $id)->first();

        #viewに連想配列を渡す
        return view('sites.channel.htdocs.edit', compact('word','data'));
    }

    #DBの更新処理
    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(Request $request, $id)
    {
        $word =  "編集完了！";

        $md = new Channel();
        $channel = $md->where('id', $id)->first();
        $channel->title = $request->input('title');
        $channel->broadcaster = $request->input('broadcaster');
        $channel->public_broadcast = $request->input('public_broadcast');
        $channel->updated_at = $request->input(now());
        $channel->save();

        return view('sites.channel.htdocs.complete', compact('word'));
    }

    public function delete($id){

        $word =  "削除しました";

        DB::table('channels')->where('id', $id)->delete();

        return view('sites.channel.htdocs.complete', compact('word'));

    }

}
