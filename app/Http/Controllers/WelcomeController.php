<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Channel; // 対象テーブルのModelsの読み込みを忘れないように


class WelcomeController extends Controller
{
    public function index(Channel $channel_model){
        //dd($channel_model->getPublishedChannels());
        $channels = DB::table('channels');
        $data = $channels->get();

        // ループで1件ずつ取得
        foreach ($data as $d) {
            echo $d->title;
        }

        // 結果データそのものから直接取得
        echo $data[0]->title;

        $data = $channels->pluck('title', 'description');

        echo $data;
    }
}