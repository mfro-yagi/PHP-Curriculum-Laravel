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

        $select = DB::table('shop')
            ->join('item','shop.item_id', '=', 'item.item_id')
            ->select(['shop.shop_name',
                'shop.item_id',
                'item.item_name',
                'shop.quantity'])
            ;

//        $data = DB::table('shop_b')
//            ->join('item','shop_b.item_id', '=', 'item.item_id')//->query()
//            ->insert(['shop_b.shop_name',
//                'shop_b.item_id',
//                'item.item_name',
//                'shop_b.quantity'])
//            ->values($select)
//            ->execute();


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

        $dataB = DB::table('shop_b')
            ->join('item','shop_b.item_id', '=', 'item.item_id')
            ->select('shop_b.shop_name',
                'shop_b.item_id',
                'item.item_name',
                'shop_b.quantity')
            ->union($dataA);

        $data = $dataA ->union($dataB)->get();

        $insert = DB::insert('insert into $dataB select * from $dataA');

        $sum_data = DB::table($insert)
            ->selectRaw('item.item_name, sum(shop_b.quantity) AS quantity_cnt')
            ->groupBy('item.item_name')
        ->get();

        //$data = DB::insert("INSERT INTO $dataA SELECT * FROM  $dataB");

        //null判定
        DB::table('shop_b') -> whereNull('shop_name') -> get();

// ビューを返す
        return view('sites.shop.htdocs.index', compact('word','data', 'sum_data'));
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
//            ->insert('insert into shop ')
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
