@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

            </div>

        </div>
    </div>

</div>


<div class="container">

<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="/imgs/photo-1617042375876-a13e36732a04.jfif" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="/imgs/istockphoto-1289411982-170667a.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">1.K</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>


  <div class="card">
    <img class="card-img-top" src="/imgs/photo-1617042375876-a13e36732a04.jfif" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">-Card title- </h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
    <div class="container" style="text-align: center">
        <form method="get" action="{{route('cardlist')}}">
            <input type="submit" style="
  background-color: #1b4b72;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;" value="Results">
        </form>
        <form method="get" action="{{route('store')}}">
            <input type="submit" style="
  background-color: #1b4b72;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;" value="Create new card">
        </form>

    </div>


@endsection

