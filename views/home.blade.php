@include('session_client.header')

<body>
@guest


                            
@else




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

                <span class="breadcrumb-label" itemprop="name" style="color:#d6478f;"><u>compte</u></span>
                </a>
            <meta itemprop="position" content="2" />
        </li>
</ul>
<br>
<nav class="navBar navBar--sub">
    <ul class="navBar-section account-navigation">


            <li class="navBar-item navPages-action is-active"  style="color:#d6478f;" >
                 Mon compte
            </li>
            <li class="navBar-item ">
        
           
            <a class="navBar-action navPages-action" href="{{ route('users.edit', Auth::user()->id ) }}">

Mes Informations personnelles
</a>
            </li>
            <li class="navBar-item">
                <a class="navBar-action navPages-action" href="/changePassword">
Changer mot de passe               </a>
            </li>
            <li class="navBar-item">
                <a class="navBar-action navPages-action" href="{{ route('users.historique', Auth::user()->id ) }}">
Historique et détails de mes commandes                </a>
            </li>
    </ul>
</nav>

<main class="account account--fixed">
<center>
    <h3 style="color:#1a7022;text-transform: uppercase;"> BIENVENU M .{{ Auth::user()->name }}   </h3>
    </center>

    <main class="account account--fixed">
    <p><strong  style="color:#d6478f;" >C'est votre compte  MAREKTI BIO  , profitez de nos offres .</strong></p>
    <ol>
        <li>'<a href="/"> MAREKTI </a>', vous propose une centaine de produits dans les gammes suivantes : <br>
        cosmétiques bio <br>maquillage naturel<br> parfums et compléments nutritionnels.</li>
        <li>La première valeur ajoutée offerte par '<a href="/"> MAREKTI </a>' est de choisir des produits qui répondent aux besoins réels du marché car tous les produits sont le résultat de notre écoute du marché.</li>
        <li>La deuxième valeur ajoutée est la haute qualité des produits proposés par un expert naturel en soin et beauté et la différenciation claire de nos produits.</li>
    </ol>
</main>

    
</main>

</div>

  <br>
  <br>
<div class="card-figcaption-body">

                                <a href="/contact-us" class="button button--small card-figcaption-button quickview" data-event-type="product-click" data-product-id="107" style="color:#1a7022">Voulez-vous contacter le service client?</a>
                            
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                             </form>
                                    
                                <a href="{{route('logout') }}" class="button button--small card-figcaption-button quickview" data-event-type="product-click" data-product-id="107" style="background-color: #FFDAB9		;">Déconnexion</a>

             </div>
</div>

</div>


        @endguest

        @include('session_client.footer')