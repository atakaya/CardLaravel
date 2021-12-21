@extends('layouts.app')
@section('content')

    <h1> CARD LIST </h1>

    <table border="5">
        <div class="d-flex">
            @foreach($cards as $listcr)

                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="/imgs/photo-1617042375876-a13e36732a04.jfif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$listcr['title']}}</h5>
                            <p class="card-text">{{$listcr['description']}}</p>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">{{$listcr['url']}}</small>

                            <a href="{{url('edit/'.$listcr->id)}}" class="btn btn-success">Update</a>

                            <a href="{{url('del/'.$listcr->id)}}" class="btn btn-danger">Delete</a>

                        </div>
                    </div>
                </div>


            @endforeach
        </div>
    </table>

    <span>
    {{$cards->links()}}
</span>

@endsection



