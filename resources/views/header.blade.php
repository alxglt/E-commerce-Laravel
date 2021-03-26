<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <meta charset="UTF-8">
    <title>Home</title>
    <script src="{{ asset("js/index.js") }}"></script>
</head>

<body id="main" onload="test(), LoadTotalItem()">
    <header>
        <div class = "headertitre">
            <a href="/">
        <p>Im'Prime</p>
            </a>
            @if(isset(Auth::user()->name))
                <p class="connect_user">{{ Auth::user()->name }}<a href="/logout" class="logout"> Log out</a></p>
            @else
            <a href="/login">
                <p>login</p>
            </a>
                @endif
        </div>
        <div class="nav">
            <nav>
                @if(isset(Auth::user()->name))
                @if (Auth::user()->role_id == '2')
                    <a href="/admin">
                        <p>Admin</p>
                    </a>
                @endif
                @endif
                <a href="/shop">
                    <p>Catalog</p>
                </a>
                <a href="/cart/">
                    <p>Cart @if(isset(Auth::user()->name)) <span class="vignette" id="vignette"> </span> @endif </p>
                </a>
            </nav>
        </div>
    </header>
</body>
</html>
