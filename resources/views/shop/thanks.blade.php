@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <div class="container">
        <h2>Thanks!</h2>
        <h3 class="">We have Received Your Order, you will be called shortly</h3>
        <p><a class="btn btn-primary btn-lg" href="{{ route('menu.landing') }}" role="button">Continue Shopping&raquo;</a></p>
    </div>
</div>
@endsection
