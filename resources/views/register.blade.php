<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <meta charset="UTF-8">
    <title>register</title>
</head>

<body>
@include('header')

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



<main class="center">
    <div class="container">
        <form  method="post">
            {{csrf_field()}}
            <label for="name">Full name</label>
            <input type="text" id="name" name="name"><br>

            <label for="email">Mail</label>
            <input type="text" id="email" name="email"><br>

            <label for="password">Password</label>
            <input type="password" id="password" name="password"><br>

            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
            <button type="submit"> Create my account </button>
        </form>

    </div>
</main>




@include('footer')

</body>

</html>
