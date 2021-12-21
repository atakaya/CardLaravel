@extends('layouts.app')
@section('content')
    <div class="container">
        <!doctype html>

        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title> FORM </title>
        </head>

        <body>
        <form method="post" action="{{route('cardupdate',$cardlst->id)}}">

            @csrf

            <label>Title</label><br>
            <input type="text" name="title" value="{{$cardlst->title}}"><br>

            <label>Url</label><br>
            <input type="text" name="url" value="{{$cardlst->url}}"><br>

            <label>Description</label><br>
            <textarea name="description" value="{{$cardlst->description}}" style="width: 300px; height: 200px;"></textarea><br>
            <input type="submit" name="send" value="Update">
        </form>

        </body>

        </html></div>
@endsection
