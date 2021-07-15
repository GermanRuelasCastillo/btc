@extends('layout.app')
@section('content')
    <div id="app">
        <btc-component :btc="{{ json_encode($btc) }}"></btc-component>
    </div>
    @include('layout.features')
@endsection
