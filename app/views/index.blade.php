@extends('layout')

@section('content')
  <h1>Hi, I'm learning Laravel!</h1>
  <hr />
  <p>Url is :</p>
  <pre>{{ url() }}</pre>
  <hr />
  <ul>
    @foreach($links as $link)
      <li>{{ $link->fire() }}</li>
    @endforeach
  </ul>
@stop
