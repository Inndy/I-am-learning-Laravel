@extends('layout')

@section('content')
    <div class="col-xs-offset-1 col-xs-10
                col-sm-offset-2 col-sm-8
                col-md-offset-3 col-md-6
                col-lg-offset-4 col-lg-4">
      <h1>User Login</h1>
      {{ Form::open(['action' => 'UserController@auth_user']) }}
      <div class="form-group">
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['class' => 'form-control']) }}
      </div>
      <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['class' => 'form-control']) }}
      </div>
      <div class="form-group">
        {{ Form::submit('Login', ['class' => 'btn btn-primary form-control']) }}
      </div>
      {{ Form::close() }}
    </div>
@stop
