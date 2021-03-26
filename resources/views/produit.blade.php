<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <meta charset="UTF-8">
    <title>Item</title>
    <link rel="icon" type="image/png"    href="{{ asset("images/icone.jpg") }}">
    <script src="{{ asset("js/index.css") }}"></script>
</head>

<body>
@include('header')
    <main class="center">
        <div class="produit">
            <div class="item">
                @foreach( $item as $item )
                    <section>
                        <img src={{  asset("$item->picture_path") }} alt="product">
                        <h1> Name : {{$item->name}} </h1>
                        <h1> Description : {{$item->description}} </h1>
                        <h1> Category : {{$item->categorie}} </h1>
                        <h1> Stock : {{$item->quantity}} </h1>
                        @if(isset(Auth::user()->name))
                            @if (Auth::user()->role_id == '2')
                                <form method="post" action="modify/value/{{$item->id}}">
                                    {{csrf_field()}}
                                    <input type="number" id="number" name="number" min="0">
                                    <button class="bouton" type="submit" value="modify" name="modify"> Modify </button>
                                </form>
                            @endif
                        @endif
                        <h1> Price : {{$item->price}} $ </h1>
                        <button class="learn_add" onclick="AddItemFromLearn()"> Add to cart</button> <br>
                    </section>
                @endforeach
            </div>
        </div>
    </main>
@include('footer')
</body>
</html>