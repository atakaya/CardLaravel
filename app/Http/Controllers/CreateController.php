<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('create');
    }

    public function add()
    {
        DB::table('cards')->insert([
            "description"=>"mings emiliano luiz",
            "url"=>"aston.com",
            "title"=>"villa"
        ]);
    }


    public function update()
    {
        DB::table('cards')->where('id',2)->update([
            "description"=>"gre out!"
        ]);
    }

    public function delete()
    {
        DB::table('cards')->where('id',2)->delete();
    }
}
