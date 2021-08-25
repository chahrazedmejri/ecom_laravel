@include('session_client.header')

@include('session_client.content')

<body class="home">
<!-- ACTIVE SHOPNAV DIM PAGE -->
<div id="shopnav-dim-page" style="display: none;">
<div style="top: 50%; left: 50%; display: none;" id="dialog" class="window">
  <div id="san"></div>
</div>
<div style="width: 2478px; font-size: 32pt; color:white; height: 1202px; display: none; opacity: 0.4;" id="mask"></div>
</div>
<!-- END ACTIVE SHOPNAV DIM PAGE -->
<!-- snippet location header -->
<svg data-src="https://cdn11.bigcommerce.com/s-6jbwqzrjqe/stencil/c5ee5f40-70af-0139-f82d-369fe140043f/img/icon-sprite.svg" class="icons-svg-sprite"></svg>


<div class="banners" data-banner-location="top">
<div class="banner" data-event-type="promotion" data-entity-id="1" data-name="Home Page Top" data-position="top" data-banner-id="Home Page Top">
<div data-event-type="promotion-click">
<p>Votre opinion est très importante pour nous. &nbsp;-&nbsp;</strong><strong> <a href="contact-us">&nbsp; Contactez-nous </a></strong> </p>
</div>

</div>
</div>

@include('session_client.footer')