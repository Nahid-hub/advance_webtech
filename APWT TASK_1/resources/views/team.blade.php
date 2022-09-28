<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Page</title>
</head>
<body>
@extends('Layouts.app')
    @section('content')
    <center>
    <h2>Here Our Team Member--- </h2><br>
    
      @foreach($team as $t)
      <p>
          {{$t}}
     </p>
      @endforeach

    </center>
    @endsection
</body>
</html>