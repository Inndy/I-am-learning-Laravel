@extends('layout')

@section('content')
  <h1>Hi, I'm learning Laravel!</h1>
  <hr />
  <p>Url is :</p>
  <pre>{{ url() }}</pre>
  <hr />
  <ul>
    @foreach($links as $link)
      <li><a href="{{ $link->link }}">{{ $link->name }}</a></li>
    @endforeach
  </ul>
@stop
