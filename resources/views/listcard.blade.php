@extends('layouts.app')
@section('content')

    <h1>Card List</h1>

    <table border="5">
        <div class="d-flex">
            @foreach($card_items as $listca)


                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="/imgs/photo-1617042375876-a13e36732a04.jfif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$listca['title']}}</h5>
                            <p class="card-text">{{$listca['description']}}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">{{$listca['url']}}</small>
                        </div>
                    </div>
                </div>


        @endforeach
        </div>
    </table>

    <span>
    {{$card_items->links()}}
</span>

@endsection



