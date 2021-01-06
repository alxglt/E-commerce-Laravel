<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <meta charset="UTF-8">
    <title>Admin</title>
</head>

<body>
@include('header')

@if(isset(Auth::user()->name))
    @if (Auth::user()->role_id == '2')
        //
    @else
        <script> window.location='/home' </script>
    @endif
@endif

@if($errors->any())
    <div class="centerbis">
        <div class="alert_box">
            <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
            <ul> @foreach ($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if(session()->has('message'))
    <div class="centerbis">
        <div class="sucess_box">
            <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ session()->get('message') }}
        </div>
    </div>
@endif


    <main class="center">
        <div class="container">
            <form action="" class="formlogin" method="post">
                {{csrf_field()}}

                <label for="pathimage">Image path</label>
                <input type="text" id="pathimage" name="pathimage"><br>

                <label for="titreproduit">Titre du produit</label>
                <input type="text" id="item_title" name="item_title"><br>

                <label for="description">Description</label>
                <input type="text" id="desc" name="desc"><br>

                <label for="prix">Prix</label>
                <input type="text" id="price" name="price"><br>

                <label for="catégorie">Catégorie</label>
                <input type="text" id="cat" name="cat"><br>

                <label for="quantité">Quantité</label>
                <input type="text" id="qty" name="qty"><br>

                <button type="submit" value="add" name="add"> Add item </button>
            </form>
        </div>
    </main>
@include('footer')
</body>

</html>
