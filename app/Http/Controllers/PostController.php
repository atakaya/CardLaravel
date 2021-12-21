<?php

namespace App\Http\Controllers;

use App\CardItem;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    /*  public function index()
      {
          $posts = Post::orderBy('title','desc')->paginate(3);

          return view('post.index')->withPosts($posts);
      }

  // 1) card_item tablosundan kart cekilecek. 2) çekilen kartlar 2şerli olarak bir sayfaya ayılacak (paginate yapısıyla)

       public function showList()
          {
              $data = CardItem::paginate(3);
              return view('listcard',['listcards'=>$data]);

             // dd(CardItem::all());

              return "ne";
          }

   */
}
