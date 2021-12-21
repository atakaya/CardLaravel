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
<form method="post" action="{{route('result')}}">

    @csrf
    <label>Title</label><br>
    <input type="text" name="title"><br>

    <label>Url</label><br>
    <input type="text" name="url"><br>

    <label>Description</label><br>
    <textarea name="description" style="width: 300px; height: 200px;"></textarea><br>
    <input type="submit" name="send" value="SEND">
</form>

</body>

</html></div>
@endsection
