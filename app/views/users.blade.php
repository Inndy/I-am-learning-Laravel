@extends('layout')

@section('content')
  <h1>Hi!</h1>
  <hr />
  <h2>Registration</h2>
  @if(isset($msg))
    <div class="msg {{ $msg_type or '' }}">{{ $msg }}</div>
    <hr />
  @endif

  @if(isset($added))
    <p>Hi, {{ $added->name }}, You have been registered successfully.</p>
  @else
    {{ Form::open() }}
      <table class="table">
        <tr>
          <td>{{ Form::label('name', 'Username') }}</td>
          <td>{{ Form::text('name') }}</td>
        </tr>
        <tr>
          <td>{{ Form::label('email', 'E-Mail') }}</td>
          <td>{{ Form::text('email') }}</td>
        </tr>
        <tr>
          <td>{{ Form::label('password', 'Password') }}</td>
          <td>{{ Form::password('password') }}</td>
        </tr>
        <tr>
          <td colspan="2">{{ Form::submit('Sign Up!', [ 'class' => 'btn btn-primary' ]) }}</td>
        </tr>
      </table>
    {{ Form::close() }}
    <p style="font-size: 8pt; color: red;">Warning: We're using plainpass.</p>
  @endif
  <hr />
  <h2>List Users</h2>
  <ul>
  @foreach($users as $user)
    <li>{{ HTML::LinkAction('UserController@show_user', $user->name, $user->id) }}</li>
  @endforeach
  </ul>
@stop
