<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
@extends('layouts.app')
    @section('content')
    <form action="{{route('contact')}}" class="form-group" method="post"> 
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
        <label for="">Phone Number</label>
        <input type="text" name="Phone" value="{{old('Phone')}}" class="form-control">
        @if($errors->has('Phone'))
        <span>
            <strong>{{$errors->first('Phone') }}</strong>
        </span>
        @endif
        <br>
        <label for="">Message</label>
        <textarea class="form-control" name="Message" rows="5" value="{{old('Message')}}">
        </textarea>
        @if($errors->has('Message'))
        <span>
            <strong>{{$errors->first('Message') }}</strong>
        </span>
        @endif
        <br>
        <input type="submit" value="Submit" class="btn btn-outline-primary">
    </form> 
    @endsection
</body>
</html>