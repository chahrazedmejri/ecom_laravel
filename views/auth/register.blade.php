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
                <span class="breadcrumb-label" itemprop="name" style="color:#d6478f;"><u>Connexion</u></span></a>
            <meta itemprop="position" content="2" />
        </li>

        </ul>
        <br>
        <h5 class="page-heading" style="color:#d6478f;">  Nouveau chez Marekti bio? <h1  style="color:#1a7022"
>CRÉEZ VOTRE COMPTE</h1><h5>

<h5>   
                    @if (session('validate'))
                        <div class="alert alert-danger">
                            {{ session('validate') }}
                        </div>
                    @endif</h5>




<div class="account account--fixed">

        <div class="account-body" >
                   
                



                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-row form-row--half">
                        <label class="form-label" for="FormField_1_input" > Nom <small style="color:#d6478f;">*</small></label>

                                <input class="form-input" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span style="color:#d6478f;" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
<br>
                        <div class="form-row form-row--half">
                        <label class="form-label" for="FormField_1_input"> Adresse E-mail <small style="color:#d6478f;">*</small></label>

                                <input class="form-input" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span style="color:#d6478f;" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
<br>
<div class="form-row form-row--half">
<label class="form-label" for="FormField_1_input"> Mot de passe<small style="color:#d6478f;">*</small></label>

                                <input class="form-input"  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span style="color:#d6478f;" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
<br>
<div class="form-row form-row--half">
                        <label class="form-label" for="FormField_1_input">Confirmer le Mot de passe<small style="color:#d6478f;">*</small></label>

                                <input class="form-input"  id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
<br>
<div class="g-recaptcha" data-sitekey="6LccmasUAAAAAIRhScC9asOrH_rQblw06weNOzDI"></div><br/>
                  

                  
                    <div class="form-actions">
                        <input type="submit" class="button button--primary" value="Je m'inscris" />
                    </div>
                        </form>
        </div>
    </div>

    </div>
    <div id="modal" class="modal" data-reveal data-prevent-quick-search-close>

</div>

</div>
   
</div>











        
@include('session_client.footer')