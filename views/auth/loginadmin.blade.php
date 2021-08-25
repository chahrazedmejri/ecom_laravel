<!DOCTYPE html>
<html>

<!-- Head -->
<head>


<title>Admin Marekti</title>
<meta charset="utf-8">
<link href="{{asset('images/logoof2.png')}}" rel="shortcut icon">
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<link href="https://demo.w3layouts.com/demos_new/template_demo/05-06-2017/existing_login_form-demo_Free/1043085537/web/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

<!-- Style --> <link rel="stylesheet" href="{{asset('css/style2.css')}}" type="text/css" media="all">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="https://demo.w3layouts.com/assests/css/font-awesome.min.css">
<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}


#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}


/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}



@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}
</style>

</div>
</div>


<!---728x90--->

	<h1>ADMIN MAREKTI </h1>
<!---728x90--->
	<div class="w3layoutscontaineragileits">
	<h2></h2>
    @isset($url)
                    <form method="POST"  class="signin-form" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                    @else
                    <form method="POST"  class="signin-form" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @endisset
                        @csrf
                        
                        
                        <input  placeholder="Adresse E-mail "  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror		
<input placeholder="Mot de passe" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror


			<ul class="agileinfotickwthree">
				<li>


                    @if (Route::has('password.request'))
<a href="{{ route('password.request') }}"  ><b>j'ai oublié mon mot de passe!</b></a>
@endif				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input type="submit" value="SE CONNECTER">
				<p> Pour visiter marekti bio <span>→</span> <a class="w3_play_icon1" href="/"> Cliquez ici</a></p>
				<div class="clear"></div>
			</div>
		</form>
	</div>
	

<!---728x90--->
	<div class="w3footeragile">
		<p>  Entrez les informations de connexion pour accéder à la session de Admin <a href="/">MAREKTI BIO !</a></p>
	</div>

	
	<script type="https://demo.w3layouts.com/demos_new/template_demo/05-06-2017/existing_login_form-demo_Free/1043085537/web/js/jquery-2.1.4.min.js" src="js/jquery-2.1.4.min.js"></script>

	<!-- pop-up-box-js-file -->  
		<script src="https://demo.w3layouts.com/demos_new/template_demo/05-06-2017/existing_login_form-demo_Free/1043085537/web/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box-js-file -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>



<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '//a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>
<!-- //Body -->

</html>