@extends('main_layout')
@section('title')
Registration
@endsection
@section('content')
 @include('include.message')

<div class="col-md-6  ">
    {{Form::open(['url'=>'signup','method'=>'post','class'=>'form'])}}
    <div class="form-group {{$errors->has('email') ? 'has-error':''}}">
    {{Form::label('email','Email')}}
    {{Form::text('email',Request::old('email'),['placeholder'=>'Email','class'=>'form-control'])}}
    </div>
    <div class="form-group {{$errors->has('firstname') ? 'has-error':''}}">

    {{Form::label('firstname','First name')}}
    {{Form::text('firstname',Request::old('firsname'),['placeholder'=>'First name','class'=>'form-control'])}}
   </div>
    <div class="form-group {{$errors->has('password') ? 'has-error':''}}">

    {{Form::label('password','Password')}}
    {{Form::password('password',['placeholder'=>'Password','class'=>'form-control'])}}
    </div>
    <div class="form-group {{$errors->has('email') ? 'has-error':''}}">

    {{Form::submit('Sign up',['id'=>'login-button','class'=>'btn btn secondary'])}}
    {{Form::close()}}
    </div>
</div>
<div class="col-md-6  ">
    {{Form::open(['url'=>'signin','method'=>'post','class'=>'form'])}}
    <div class="form-group {{$errors->has('email') ? 'has-error':''}}">
    {{Form::label('email','Email')}}
    {{Form::text('email',Request::old('email'),['placeholder'=>'email','class'=>'form-control'])}}
     </div>
    <div class="form-group {{$errors->has('password') ? 'has-error':''}}">
    {{Form::label('password','Password')}}
    {{Form::password('password',['placeholder'=>'Password','class'=>'form-control'])}}
    </div>
    <div class="form-group ">
    {{Form::submit('Login',['id'=>'login-button','class'=>'btn btn secondary'])}}
    {{Form::close()}}
</div>
    </div>
@endsection