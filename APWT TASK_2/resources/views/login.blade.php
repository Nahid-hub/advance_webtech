<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
@extends('layouts.app')
    @section('content')
    <form action="{{route('login')}}" class="form-group" method="post"> 
        {{csrf_field()}}
        <label for="">Email</label>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        @if($errors->has('email'))
        <span>
            <strong>{{$errors->first('email') }}</strong>
        </span>
        @endif
        <br>
        <label for="">Password</label>
        <input type="text" name="Password" value="{{old('Password')}}" class="form-control">
        @if($errors->has('Password'))
        <span>
            <strong>{{$errors->first('Password') }}</strong>
        </span>
        @endif
        <br>
        <input type="submit" value="Submit" class="btn btn-outline-primary">
    </form> 
    @endsection
</body>
</html>