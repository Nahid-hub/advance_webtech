<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
</head>
<body>
@extends('Layouts.app')
    @section('content')
    <center>
    <h2>Here Our Services: </h2><br>

    
      @foreach($product as $product)

      <p>
          {{$product-> service}}
     </p>
      @endforeach

    </center>
@endsection
</body>
</html>