@include('session_client.header')
<br>
<div data-content-region="header_below_nav--global"></div>
<div class="clear"></div>
        <div class="body" data-currency-code="USD">
     
    <div class="container">
            <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="/" class="breadcrumb-label" itemprop="item"><span itemprop="name">Acceuil</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb is-active" itemprop="itemListElement" itemscope >
                <meta itemprop="item" content="">
                <a href="/login" class="breadcrumb-label" itemprop="item">
                <span class="breadcrumb-label" itemprop="name" style="color:#d6478f;"><u>Se Connecter</u></span></a>
            <meta itemprop="position" content="2" />
        </li>

        </ul>
        <br>
    <h1 class="page-heading" style="color:#1a7022">DÉJÀ INSCRIT?</h1>

    

    @if(session('success'))
<div  class="alert alert-success">
    <p><strong >{{session('success')}} <img src="{{asset('images/msg.png')}}" width="30" height="20"></strong></p>
</div>
@endif

@if(session('successcontact'))
<div  class="alert alert-success">
    <p><strong >{{ session('successcontact') }} <img src="{{asset('images/msg.png')}}" width="30" height="20"></strong></p>
</div>
@endif

    <div class="login-row">
        <form class="login-form form" method="POST" action="{{ route('login') }}">
        @csrf

            
        
            
            <div class="form-field">
    <label class="form-label" for="login_email"> Addresse Email:  <a style="color:#d6478f;" > * </a></label>
                    <input class="form-input" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>


            <div class="form-field">
                <label class="form-label" for="login_pass">Mot de passe:  <a style="color:#d6478f;" > * </a></label>
                                <input class="form-input" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                     
            <div class="col-md-12">


<div class="custom-control custom-checkbox">
<input checked class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
  
    <label  class="form-check-label" for="remember" >Confirmer</label>
</div>
</div>

            <div class="form-actions">
            <input type="submit" class="button button--primary" value="Confirmer">


@if (Route::has('password.request'))
    <a class="btn btn-link"  style="color:#d6478f;" href="{{ route('password.request') }}">
       Mot de passe oublié?
    </a>
@endif
            </div>



        </form>
            <div class="new-customer">
                <div class="panel">
                    <div class="panel-header">
                        <h2 class="panel-title" style="color:#d6478f;">Nouveau client? </h2>
                    </div>
                    <div class="panel-body">
                        <p class="new-customer-intro">Créez un compte avec nous et vous pourrez&#x27;:</p>
                        <ul class="new-customer-fact-list">
                            <li class="new-customer-fact">Commander produits et profiter de nos offres</li>
                            <li class="new-customer-fact">Enregistrer plusieurs adresses de livraison</li>
                            <li class="new-customer-fact">Accédez à l'historique de vos commandes</li>
                            <li class="new-customer-fact">Suivre les nouvelles offres</li>
                        </ul>
                        <a href="/register"><button class="button button--primary">CRÉEZ VOTRE COMPTE
</button></a>
                    </div>
                </div>
            </div>
    </div>
</div>

    </div>
    <div id="modal" class="modal" data-reveal data-prevent-quick-search-close>

</div>

</div>
   
</div>





















@include('session_client.footer')