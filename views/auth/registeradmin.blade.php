<!doctype html>
<html lang="en">
<head>
<title>Admin Marekti</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('x/style.css')}}">
</head>
<body class="img js-fullheight" style="background-image: url( {{asset('images/admin/ex2.png')}} )">
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12 text-center mb-12">

<h4 class="mb-12 text-center">
<div class="login-heading">
<p style="color:#ffffffff;">Veuillez remplir les champs suivants :</p>
</div></h4>
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-12 col-lg-7">
<div class="login-wrap p-0">
<div>
</div>
<div class="card-body">
                    @isset($url)
                    <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                    @else
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @endisset
                        @csrf


<div class="form-group">
<input  placeholder="Nom" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>


@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>

<div class="form-group">
<input  placeholder="E-mail "  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>


<div class="form-group">

<input  placeholder="image_path "  id="image_path" type="text" class="form-control @error('image_path') is-invalid @enderror" name="image_path" value="{{ old('image_path') }}" required autocomplete="image_path" autofocus>

</div>


<div class="form-group">
<input placeholder="Mot de passe" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>

<div class="form-group">

                                  <input placeholder="confirmer Mot de passe" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>






<div class="form-group"><a style="color:#ff9999;">
<button type="submit" class="form-control btn btn-primary submit px-3">Confirmer</button></a>
</div>
<div class="form-group d-md-flex">
<div class="w-50 text-md-right">
@if (Route::has('password.request'))
<a href="{{ route('password.request') }}"  class="f-right" style="color:#339966;"><b>j'ai oublié mon mot de passe!</b></a>
@endif

</div>
</div>
</form>



</div>
</div>
</div>
</div>
</section>
<script src="{{asset('x/jquery.min.js')}}"></script>
<script src="{{asset('x/popper.js')}}"></script>
<script src="{{asset('x/bootstrap.min.js')}}"></script>
<script src="{{asset('x/main.js')}}"></script>
</body>
</html>