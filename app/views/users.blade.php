@extends('layout')

@section('content')
  <h1>Hi!</h1>
  <hr />
  <h2>Registration</h2>
  @if(isset($added))
    <p>Hi, {{ $added->name }}, You have been registered successfully.</p>
  @else
    {{ Form::open() }}
      <table>
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
          <td colspan="2">{{ Form::submit('Sign Up!') }}</td>
        </tr>
      </table>
    {{ Form::close() }}
  @endif
  <hr />
  <h2>List Users</h2>
  <ul>
  @foreach($users as $user)
    <li>{{ $user->name }}</li>
  @endforeach
  </ul>
@stop
