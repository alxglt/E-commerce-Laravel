<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
	<meta charset="UTF-8">
	<title>login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

    @if(session()->has('error'))
        <div class="centerbis">
            <div class="alert_box">
                <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ session()->get('error') }}
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
			<form method="post" action="{{ url('login/checklogin')  }}">

                {{csrf_field()}}

				<label for="email"> Email : </label>
				<input type="text" id="email" name="email"><br>

				<label for="password"> Password : </label>
				<input type="password" id="password" name="password">
                <button type="submit" value="login" name="login"> Login </button>
			</form>
            <br>
            <button onclick="window.location.href='/register'"> Create an account  </button>
            <button onclick="window.location.href='/forgot'"> Forgot your password  </button>
		</div>
	</main>

    @include('footer')

</body>


</html>
