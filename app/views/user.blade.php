@extends('layout')

@section('content')
  @if(isset($user))
    <h1>User Detail</h1>
    <hr />
    <table class="table">
      <tr>
        <th>Item</th>
        <th>Value</th>
      </tr>
      @foreach($columns as $col => $col_name)
      <tr>
        <td>{{ $col_name }}</td>
        <td>{{ $user->$col }}</td>
      </tr>
      @endforeach
    </table>
  @else
  @endif
@stop
