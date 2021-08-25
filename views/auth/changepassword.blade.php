@include('session_client.header')


<br>
<br>
<div class="clear"></div>
        </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>

</header>
<div data-content-region="header_below_nav--global"></div>
<div class="clear"></div>
        <div class="body" data-currency-code="USD">
     
    <div class="container">
        
<ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="/" class="breadcrumb-label" itemprop="item"><span itemprop="name">Acceuil</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb is-active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <meta itemprop="item" content="https://vault-natural-demo.mybigcommerce.com/giftcertificates.php?action=redeem">
                <a href="/login">
                <span class="breadcrumb-label" itemprop="name" style="color:#d6478f;" ><u>compte</u></span>
                </a>
            <meta itemprop="position" content="2" />
        </li>
</ul>
  <br>
<nav class="navBar navBar--sub">
    <ul class="navBar-section account-navigation">


            <li class="navBar-item navPages-action " >
            <a class="navBar-action navPages-action" href="/login">

                 Mon compte
                 </a>
            </li>


            </li>
            <li class="navBar-item navPages-action" >
            <a  class="navBar-action navPages-action" href="{{ route('users.edit', Auth::user()->id ) }}">
Mes Informations personnelles
</a>


            <li class="navBar-item navPages-action   is-active" >
            <a style="color:#d6478f;" class="navBar-action navPages-action" href="/changePassword">
            Changer mot de passe  
</a>
            </li>

        

            <li class="navBar-item">
                <a class="navBar-action navPages-action" href="{{ route('users.historique', Auth::user()->id ) }}">
Historique et détails de mes commandes                </a>
            </li>
    </ul>
</nav>

<h2  class="page-heading showcase-products" style="color:#1a7022" id="x">changer votre mot de passe </h2>
<br>


<div class="account account--fixed" >
<div style="color:#d6478f;" class="panel-body">
                   
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif


           
    
    <form  class="panel-body" for="FormField_1_input" method="POST" data-create-account-form class="form" action="{{ route('changePassword') }}">
                        {{ csrf_field() }}


        
                <div class="form-row form-row--half">
<div class="col-md-6" class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">



<label  class="form-label" for="new-password" class="col-md-4 control-label">Votre ancien mot de passe     <small>*</small>
</label>
       <input
  
       class="form-input"
       class="form-control" 
      
       
        id="current-password" type="password"  name="current-password" required>

                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div>

          

<br>


<div class="col-md-6" class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
<label  class="form-label" for="new-password" class="col-md-4 control-label">Nouveau Mot de passe  <small>*</small></label>
<input
  
  class="form-input"
  data-input id="new-password" type="password" class="form-control" name="new-password" required>

                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif

</div>
<br>


<div class="col-md-6">
<label  class="form-label" for="new-password-confirm" class="col-md-4 control-label">Confirmer votre Nouveau mot de passe  <small>*</small></label>

<input
  
  class="form-input"
  data-input
 id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
 <div class="g-recaptcha" data-sitekey="6LccmasUAAAAAIRhScC9asOrH_rQblw06weNOzDI"></div><br/>


</div>
</div>

                <div class="form-actions">
<input type="submit" class="button button--primary" value="Changer" >
 
 
  </div>



                
                </div>
            </form>
    </div>
</div>
</div>



<br>
<br>



        @include('session_client.footer')