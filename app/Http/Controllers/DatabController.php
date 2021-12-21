<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CardModel;

class DatabController extends Controller
{
    public function index()
    {
        return view('store');
    }

    public function addd(Request $request)
    {
        $url=$request->url;
        $title=$request->title;
        $description=$request->description;

        CardModel::create([
            "url"=>$url,
            "title"=>$title,
            "description"=>$description,
        ]);

    }

    public function edit($id)
    {
        return view('edit',['cardlst'=>CardModel::find($id)]);


    }

    public function update(Request $request, $id)
    {
        $cardlst = CardModel::find($request->id);

        $cardlst->title = $request->title;
        $cardlst->url = $request->url;
        $cardlst->description = $request->description;
        $cardlst->update();
        return redirect('cardlist');
    }

    public function del($id)
    {
        $cardlst=CardModel::find($id);
        $cardlst->delete();
        return redirect('cardlist');

    }

        public function showLst()
    {
        $data = CardModel::paginate(3);
        return view('cardlist',['cards'=>$data]);

        // dd(CardItem::all());

    }

}
