@include('session_client.header')
<br>
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
                <span class="breadcrumb-label" itemprop="name">Connexion</span></a>
            <meta itemprop="position" content="2" />
        </li>

        </ul>
        <br>
        <h5 class="page-heading" style="color:#d6478f;">  Nouveau chez Marekti bio? <h1  style="color:#1a7022"
> Vérifiez votre adresse e-mail </h1><h5>



<div class="account account--fixed">
        <div class="account-body">

                

                <div class="card-body">
                    @if (session('resent'))
                        <div style="color:#d6478f;" class="alert alert-success" role="alert">
                            {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, veuillez vérifier votre bote e-mail pour un lien de vérification. ».') }}
                    {{ __("Si vous n'avez pas reçu l'e-mail") }},
                  <br>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <br>

                        <button class="button button--primary"  type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquez ici pour en demander un autre') }}</button>.
                    </form>
                    <form class="d-inline" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <br>

                        <button class="button button--primary"  type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Annuler la demande ') }}</button>.
                    </form>
                
                
                </div>
           
    </div>
</div>

<br>
<br>



  
<div id="modal" class="modal" data-reveal data-prevent-quick-search-close>
    <button class="modal-close"
        type="button"
        title="Close"
        >
    <span class="aria-description--hidden">Close</span>
    <span aria-hidden="true">&#215;</span>
</button>
    <div class="modal-content"></div>
    <div class="loadingOverlay"></div>
</div>
    <div id="alert-modal" class="modal modal--alert modal--small" data-reveal data-prevent-quick-search-close>
    <div class="swal2-icon swal2-error swal2-icon-show"><span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span></div>

    <div class="modal-content"></div>

    <div class="button-container"><button type="button" class="confirm button" data-reveal-close>OK</button></div>
</div>
</div>
@include('session_client.footer')