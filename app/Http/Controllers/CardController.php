<?php

namespace App\Http\Controllers;

use App\CardItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CardController extends Controller
// 1) card_item tablosundan kart cekilecek. 2) çekilen kartlar 2şerli olarak bir sayfaya ayılacak (paginate yapısıyla)
{
     public function showList()
{
    $data = CardItem::paginate(3);
    return view('listcard',['card_items'=>$data]);

    // dd(CardItem::all());

}


// @extends('layouts.app')
//@section('content')
}
