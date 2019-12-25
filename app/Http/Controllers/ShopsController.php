<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Channel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class ShopsController extends Controller
{

    public function index()
    {

        $word =  "中田";

        //DB::table('channels')->where('title', '=', 5)->delete();

        $data1 =  DB::table('shop')
            ->join('item','shop.item_id', '=', 'item.item_id')
            ->select('shop.shop_name',
                'shop.item_id',
                'item.item_name',
                'item.price',
                'shop.quantity',
                'shop.created',
                'shop.modified')
            ->get();

        $data2 =  DB::table('shop_b')
            ->join('item','shop_b.item_id', '=', 'item.item_id')
            ->select('shop_b.shop_name',
                'shop_b.item_id',
                'item.item_name',
                'item.price',
                'shop_b.quantity',
                'shop_b.created',
                'shop_b.modified')
            ->get();

//        $data1 -> where('price', '>=', 5000) -> get();
//        $data1 -> whereDate('created', '2019-12-04') -> get();
//        $data1 -> whereDay('created', '27') -> get();
//        $data1 -> wheretime('created', '16:43:20') -> get();

        $dataA = DB::table('shop')
            ->join('item','shop.item_id', '=', 'item.item_id')
            ->select('shop.shop_name',
                'shop.item_id',
                'item.item_name',
                'shop.quantity')
            ;

        $data = DB::table('shop_b')
            ->join('item','shop_b.item_id', '=', 'item.item_id')
            ->select('shop_b.shop_name',
                'shop_b.item_id',
                'item.item_name',
                'shop_b.quantity')
            ->union($dataA)
            ->get();

        //null判定
        DB::table('shop_b') -> whereNull('shop_name') -> get();

// ビューを返す
        return view('sites.shop.htdocs.index', compact('word','data'));
    }

//    public function iPod(){
//        $tokyo = DB::table('shop')
//            ->join('item','shop.item_id', '=', 'item.item_id')
//            ->where('item.item_name', '=', 'iPod')
//            ->select('shop.shop_name',
//                'shop.item_id',
//                'item.item_name',
//                'shop.quantity');
//
//        DB::table('shop')
//            ->insert('insert into shop() ')
//            ->select('shop.shop_name',
//                'shop.item_id',
//                'item.item_name',
//                'shop.quantity');
//
//
//
//        return view('sites.shop.htdocs.index', compact('word','data'));
//    }

}
