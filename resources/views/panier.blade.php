<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <meta charset="UTF-8">
    <title>Cart</title>
</head>

<body onload="Display(), test(), LoadTotalItem()">

@include('header')


<main class="center" id="main">
    <div>
        <table class="container" id="table">



                <thead>
                <tr>
                    <th></th>
                    <th>NAME</th>
                    <th>QUANTITY</th>
                    <th>PRICE</th>
                </tr>
                </thead>
                <tbody id="panier">


                </tbody>


        </table>
        <p class="boutique" id="total"> Total</p>
        <button onclick="checkout()"> Checkout </button>
    </div>




</main>

@include('footer')
</body>


</html>
