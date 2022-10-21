<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registration Form</title>
</head>
<body>
@extends('layouts.app')
    @section('content')
    <form action="{{route('registration')}}" class="form-group" method="post"> 
        {{csrf_field()}}
        <label for="">Name</label>
        <input type="text" name="Name" value="{{old('Name')}}" class="form-control">
        @if($errors->has('Name'))
        <span>
            <strong>{{$errors->first('Name') }}</strong>
        </span>
        @endif
        <br>
        <label for="">Email</label>
        <input type="text" name="Email" value="{{old('Email')}}" class="form-control">
        @if($errors->has('Email'))
        <span>
            <strong>{{$errors->first('Email') }}</strong>
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
        <label for="">Phone Number</label>
        <input type="text" name="Phone" value="{{old('Phone')}}" class="form-control">
        @if($errors->has('Phone'))
        <span>
            <strong>{{$errors->first('Phone') }}</strong>
        </span>
        @endif
        <br>
        <input type="submit" value="Submit" class="btn btn-outline-primary">
    </form> 
    @endsection 
</body>
</html>