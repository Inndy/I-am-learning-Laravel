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
    {{ Form::open([ 'action' => [ 'UserController@del_user', $user->id ], 'method' => 'delete' ]) }}
      {{ Form::hidden('id', $user->id) }}
      {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {{ Form::close() }}
  @else
  @endif
@stop
