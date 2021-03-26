<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <meta charset="UTF-8">
    <title>reset</title>
</head>
@include('header')
<body>
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
        <form method="post" action="{{ url('/forgot/reset')  }}">
            {{csrf_field()}}
            <label for="email">Mail</label>
            <input type="text" id="mail" name="mail">
            <button type="submit" value="send" name="send"> Send Request </button>
        </form>
    </div>
</main>
@include('footer')
</body>
</html>
