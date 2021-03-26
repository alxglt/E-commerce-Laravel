<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <meta charset="UTF-8">
    <title>Catalog</title>
</head>

<body onload="test(), Step1(), LoadTotalItem()">
    @include('header')
    <div class="item">
    @foreach( $item as $item )
                <section id="{{$item->id}}">
                    <img src={{  asset("$item->picture_path") }} alt="product">
                    <h1 class="name"> {{$item->name}} </h1>
                    <h1 class="price"> {{$item->price}}  $</h1>
                    <button class="add"> Add to cart</button> <br>
                    <button class="learnmore" onclick="window.location.href='/item/{{$item->id}}'"> Learn more</button>
                </section>
    @endforeach
    </div>
    @include('footer')
</body>
</html>