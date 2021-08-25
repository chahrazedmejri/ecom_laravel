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
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="/show" class="breadcrumb-label" itemprop="item"><span itemprop="name">Blog</span></a>
            <meta itemprop="position" content="1" />
        </li> <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="" class="breadcrumb-label" itemprop="item"><span itemprop="name">{{$blogs->titre}}</span></a>
            <meta itemprop="position" content="1" />
        </li></ul>

     
        
<div class="blog-post-container">

<br>
  <article class="blog">
  <header class="blog-header">
      <h2 class="blog-title">
          <a href="/blog" data-maxlength="24">{{$blogs->titre}}</a>
      </h2>

      <p class="blog-date" data-maxlength="55">Publié le {{$blogs->date}}</p>
  </header>



    <div class="blog-post-body">
        <div class="blog-post">
                <p><strong>
</strong></p><p style="  text-align: justify;
">


{{$blogs->contenu}}

</p>        </div>



           

    </div>
</article>
 
</div>
<br>

<div id="previewModal" class="modal modal--large" data-reveal>
    <a href="#" class="modal-close" aria-label="Close" role="button">
        <span aria-hidden="true">&#215;</span>
    </a>
    <div class="modal-content"></div>
    <div class="loadingOverlay"></div>
</div>

        <div data-content-region="product_below_content"></div>

        <article class="productView-description">
               
           
                </article>
            </li>
        </ul>
        <div class="pagination">
    <ul class="pagination-list">

    </ul>
</div>
    </div>
</section>
             </div>


</div>
        </article>

</div>
    </div>







    <div class="newsletter-subscription-section">
<article class="newsletter cta" data-section-type="newsletterSubscription">
<div class="half left">
<h2 class="newsletter-heading">REJOIGNEZ NOTRE NEWSLETTER</h5>
<div class="footer-newsletter-summary">Inscrivez-vous à notre newsletter pour recevoir des offres spéciales et des promotions</div>
</div>

<div class="half right">

<form class="form" method="post" action="{{url('newsletter/store')}}">
        @csrf
<fieldset class="form-fieldset">
<input type="hidden" name="action" value="subscribe">
<input type="hidden" name="nl_first_name" value="bc">
<input type="hidden" name="check" value="1">
<div class="form-field">
    <label class="form-label is-srOnly" for="nl_email">Addresse E-mail</label>
    <div class="form-prefixPostfix wrap">
        <input class="form-input" id="nl_email" type="text" name="email"  placeholder="email address">
        <input class="button button--primary form-prefixPostfix-button--postfix" type="submit" value="Envoyé">
    </div>
</div>
</fieldset>
</form>
</div>
<div class="clear"></div>
</article>
</div>

<footer class="footer" role="contentinfo">
<div class="container">
<section class="footer-info">
    <article class="footer-info-col footer-info-col--small-4" data-section-type="footer-webPages">
        <h5 class="footer-info-heading">Service client</h5>
        <ul class="footer-info-list">
                
              
                <li>
                    <a href="/contact-us">NOUS CONTACTER</a>
                </li>
               
                <li>
                    <a href="/login">CONNEXION </a>
                </li>
                <li>
                    <a href="/register"> INSCRIPTION</a>
                </li>
                <li>
                    <a href="/show">À PROPOS DE NOUS</a>
                </li>
     
        </ul>
    </article>

    <article class="footer-info-col footer-info-col--small-4 categories" data-section-type="footer-categories">
        <h5 class="footer-info-heading">Menu</h5>
        <ul class="footer-info-list categories">
       
        <li>
                    <a href="/prodlist">Fait un Shooping Avec nous! </a>
                </li>   <li>
                    <a href="/panier">Consulter votre Panier</a>
                </li>   <li>
                    <a href="/show">Voir notre Blog</a>
                </li>
           
            <div class="footer-categories-pagination">
              <a class="navPages-action paginator previous arrow">
                <i class="icon prev" aria-hidden="true">
                  <svg><use xlink:href="#icon-chevron-left" /></svg>
                </i>
                <span class="pagination-label">prev</span>
              </a>
              <span class="dots"></span>
              <a class="navPages-action paginator next arrow">
                <span class="pagination-label">next</span>
                <i class="icon next" aria-hidden="true">
                  <svg><use xlink:href="#icon-chevron-left" /></svg>
                </i>
              </a>
            </div>
        </ul>
    </article>

    <article class="footer-info-col footer-info-col--small-4" data-section-type="footer-brands">
        <h5 class="footer-info-heading">Nous contcater
</h5>
        <ul class="footer-info-list">
        <li>
                    <a href="/"> Marektibio@gmail.com</a>
                </li><li>
                    <a href="/">  23792583 </a>
                </li><li>
                    <a href="/"> 06 rue de paris tunis 1016</a>
                </li>
       
           
        </ul>
    </article>

      <article class="footer-info-col footer-info-col--small-4" data-section-type="footer-webPages">
        <h5 class="footer-info-heading">NOUS SUIVER </h5>
              <ul class="socialLinks socialLinks--alt">
    <li class="socialLinks-item">
            <a class="icon icon--twitter" href="https://www.twitter.com/" target="_blank">
                <svg><use xlink:href="#icon-twitter" /></svg>
            </a>
    </li>
    <li class="socialLinks-item">
            <a class="icon icon--facebook" href="https://www.facebook.com/" target="_blank">
                <svg><use xlink:href="#icon-facebook" /></svg>
            </a>
    </li>
    <li class="socialLinks-item">
            <a class="icon icon--pinterest" href="https://www.pinterest.com/" target="_blank">
                <svg><use xlink:href="#icon-pinterest" /></svg>
            </a>
    </li>
    <li class="socialLinks-item">
            <a class="icon icon--youtube" href="https://www.youtube.com/" target="_blank">
                <svg><use xlink:href="#icon-youtube" /></svg>
            </a>
    </li>
    <li class="socialLinks-item">
            <a class="icon icon--instagram" href="https://www.instagram.com/" target="_blank">
                <svg><use xlink:href="#icon-instagram" /></svg>
            </a>
    </li>
    <li class="socialLinks-item">
            <a class="icon icon--linkedin" href="https://www.linkedin.com/" target="_blank">
                <svg><use xlink:href="#icon-linkedin" /></svg>
            </a>
    </li><br>

</ul>

            <!-- <li class="navPages-item navPages-item-page pages phone-number"> -->
              <a class="navPages-action phone-number">1-800-123-4567</a>
            <!-- </li> -->
      </article>
</div>

















<div class="footer-bottom">
<article class="store-info" data-section-type="storeInfo">
  <address>Tunisie</address>
     +216_23_792_583
</article>


<div class="footer-copyright">
  <p class="powered-by created-by text">Creé par <a href="/" rel="nofollow"> Mejri chahrazed</a></p>
</div>

<div class="footer-copyright">
    <p class="powered-by text">&copy; 2021</p>
</div>
</div> <!-- footer-bottom -->

<div id="topcontrol" class="backtoTop" title="Scroll Back to Top">
<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
<div class="clear"></div>
</div>

</footer>


<!-- CALL MOST RECENT JQUERY LIBRARY -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <script>
    $(window).on("load", function(){
    $(function(){
      $("header li.navUser-item.currency-menu a.navUser-action.has-dropdown").click(function(e){
        e.preventDefault();
      });
    });
  });
  </script>

<!--  FOOTER CATEGORIES PAGINATION -->
  <script>
  var divs = $("footer article.categories li");
     for(var i = 0; i < divs.length; i+=10) {
       divs.slice(i, i+10).wrapAll("<div class='categories-footer page ten'></div>");
  }
  $('div#page-wrapper').addClass('ten');


  // DYNAMICALLY ADD A PAGE NUMBER & CORRESPONSING PAGINATION DOT FOR EACH PAGE IN DROPDOWN
   $(document).ready(function() {
     // Get number of pages in dropdown
     var totalPages = $('.categories-footer.page').length;
     // console.log(totalPages);
     // ADD CORRESPONDING PAGE NUMBER TO PAGES IN DROPDOWN
     $('.categories-footer.page').each(function(i) {
       var $this = $(this);
       // var activePageNumber = $(this).index() + 1;
       var newClass = "page" + i++;
       $this.addClass(newClass);
     });
     // ADD CORRESPONDING PAGE NUMBER TO DOTS
     if (totalPages > 1) {
       for (i=0; i < totalPages; i++) {
         $('.footer-categories-pagination span.dots').append('<a class="navPages-action paginator page'+i+'"> '+(i+1)+' </a>');
       }
     }
  });
  </script>


<script>
// <!-- LINK UP ARROWS WITH PAGE NUMBER - IN PROGRESS -->
// LINK UP DOT NUMBER WITH PAGE NUMBER
  $(document).ready(function() {
    var totalPageBtns = $('.footer-categories-pagination a.navPages-action.paginator').length;
    // console.log(totalPageBtns);
    $('.categories-footer.page').addClass('inactive-page');
    $('.categories-footer.page:first').removeClass('inactive-page').addClass('active-page');
    $('.footer-categories-pagination span.dots a.navPages-action.paginator:first').addClass('active');
    $('.categories-footer.page.inactive-page').hide();
    $('.categories-footer.page:first').addClass('active-page');
    $('.footer-categories-pagination a.navPages-action.paginator:first').addClass('active-page');
    $('.footer-categories-pagination span.dots a.navPages-action.paginator').on ('click', function() {
    $('.footer-categories-pagination span.dots a.navPages-action.paginator:first').removeClass('inactive');
    var activeCatPageNumber = $(this).index();
    $('.categories-footer.page'+activeCatPageNumber).removeClass('inactive-page').addClass('active-page').siblings().removeClass('active-page').addClass('inactive-page');
   $('.categories-footer.page.active-page').fadeIn();
   // console.log(this);
   $(this).toggleClass('active-page').siblings().removeClass('active-page');
   $('.categories-footer.page.active-page.inactive-page').hide();
   if ( !($('.footer-categories-pagination a.navPages-action.paginator:first').hasClass("inactive-page"))  ){
     $('.footer-categories-pagination a.navPages-action.paginator').removeClass('active');
     $(this).addClass('active');
   }
   if ( !($('.footer-categories-pagination a.navPages-action.paginator:last').hasClass("inactive-page"))  ){
     $('.footer-categories-pagination a.navPages-action.paginator').removeClass('active');
     $(this).addClass('active');
   }
  });
  });
</script>

<script>
</script>

<script>
</script>

<script>
  var divs = $("div#page-wrapper .category-list > li.navPages-item.top-level.categories");
     for(var i = 0; i < divs.length; i+=15) {
       divs.slice(i, i+15).wrapAll("<div class='mega-nav page fifteen-per-page'><div class='fader'></div></div>");
  }
  $('div#page-wrapper').addClass('fifteen');
</script>

<script>
</script>

<script>
</script>

<script>
</script>

<script>
// <!-- DYNAMICALLY ADD A PAGE NUMBER & CORRESPONSING PAGINATION DOT FOR EACH PAGE IN DROPDOWN -->
 $(document).ready(function() {
   // Get number of pages in dropdown
   var totalPages = $('div#page-wrapper .page').length;
   // console.log(totalPages);
   // ADD CORRESPONDING PAGE NUMBER TO PAGES IN DROPDOWN
   $('div#page-wrapper .page').each(function(i) {
     var $this = $(this);
     // var activePageNumber = $(this).index() + 1;
     var newClass = "page" + i++;
     $this.addClass(newClass);
   });
   // ADD CORRESPONDING PAGE NUMBER TO DOTS
   if (totalPages > 1) {
     for (i=0; i < totalPages; i++) {
       $('.pagination-container span.dots').append('<a class="navPages-action paginator page'+i+'"> '+(i+1)+' </a>');
     }
   }
});
</script>

<script>
$(document).ready(function() {
  var totalPageBtns = $('div#page-wrapper a.navPages-action.paginator').length;
  // console.log(totalPageBtns);
  $('div#page-wrapper .category-list .page').addClass('inactive-page');
  $('div#page-wrapper .category-list .page:first').removeClass('inactive-page').addClass('active-page');
  $('div#page-wrapper .category-list .page.inactive-page .fader').hide();
  $('div#page-wrapper .page:first').addClass('active-page');
  $('div#page-wrapper .pagination-container a.navPages-action.paginator:first').addClass('active-page');
  $('div#page-wrapper .pagination-container a.navPages-action.paginator').on ('click', function() {
  var activePageNumber = $(this).index();
 $('.mega-cat-dropdown div#page-wrapper .category-list .page'+activePageNumber).removeClass('inactive-page').toggleClass('active-page').siblings().removeClass('active-page').addClass('inactive-page');
 $('.mega-cat-dropdown div#page-wrapper .category-list .page.active-page .fader').fadeIn();
 // console.log(this);
 $(this).toggleClass('active-page').siblings().removeClass('active-page');
 $('.mega-cat-dropdown .has-subMenu.is-root + .navPage-subMenu-horizontal.second-level-flyout').removeClass('active-flyout');
 $('.mega-cat-dropdown div#page-wrapper .category-list .page.inactive-page .fader').hide();
});
});
</script>

<script>
// <!-- FLYOUT NO IMAGES - WRAP EVERY 8 CATEGORIES IN A DIV FOR PAGES -->
  $(document).ready(function(){
  $('.navPage-subMenu-list.all-second-level-plus-container.flyout-page-wrapper').each(function(i) {
  var divs = $(this).children(".flyout-page-wrapper .navPage-subMenu-item-child.second-level");
     for(var i = 0; i < divs.length; i+=8) {
       divs.slice(i, i+8).wrapAll("<div class='flyout page eight-per-page'><div class='fader'></div></div>");
       // var numberOfFlyoutPages = $('.flyout.page').length;
       // console.log(numberOfFlyoutPages);
  }
});
});
</script>

<script>
// <!-- DYNAMICALLY ADD A PAGE NUMBER TO EACH FLYOUT -->
 $(document).ready(function() {
   $('.navPage-subMenu-list.all-second-level-plus-container.flyout-page-wrapper').each(function(i) {
     i = 0;
     $(this).children('div.flyout.page').each(function() {
     // console.log($this);
     // var activePageNumber = $(this).index() + 1;
     var newClass = "page" + i++;
     // console.log(newClass);
     $(this).addClass(newClass);
   });
 });
});
</script>

<script>
    // <!-- ACTIVATE FIRST PAGE IN EACH FLYOUT ON HOVER OF PARENT IN DROPDOWN -->
      $(document).ready(function() {
      $('.mega-cat-dropdown li.navPages-item').hover(function() {
        $('.flyout.page').removeClass('active-page').addClass('inactive-page');
        $('.flyout-page-wrapper .flyout-pagination-container a.navPages-action.paginator').removeClass('active-page');
        // $('.flyout-page-wrapper .flyout-pagination-container a.navPages-action.paginator:first').addClass('active-page');
        $(this).find('.flyout.page:first').removeClass('inactive-page').addClass('active-page');
        $(this).find('.flyout.page.active-page:first .fader').fadeIn();
      });
    });

      $(document).ready(function() {
        $('.mega-cat-dropdown li.navPages-item').hover(function() {
          $(this).find('.flyout-pagination-container.bottom a.navPages-action.paginator').removeClass('active-page').addClass('inactive-page');
          $(this).find('.flyout-pagination-container.bottom a.navPages-action.paginator:first').addClass('active-page').removeClass('inactive-page');
          $('.flyout-pagination-container.top a.navPages-action.previous').addClass('inactive');
          $('.flyout-pagination-container.top a.navPages-action.next').removeClass('inactive');
    });
  });
</script>


<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100 ) {
            $('.backtoTop').addClass("visible");
        } else {
            $('.backtoTop').removeClass("visible");
        }
    });

    $('.backtoTop').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
    });
</script>

<script>
// <!-- HIDE SUBCATEGORY IMAGES IF CATEGORY IMAGE IS NOT SET-->
$(document).ready(function(){
	if($('.subcategory-image.uploaded').length) {
    $('.subcategory-grid').addClass('has-images');
		$("li.subcategory-item .subcategory-image").fadeIn();
	}
});
</script>


<script>
$(window).on("load", function(){
	$('.subcategory-grid').fadeIn();
	$('.productGrid').fadeIn();
});
</script>

<script>
$(window).on("load", function(){
if ($('.subcategory-image').hasClass('uploaded')) {
    $('li.subcategory-item').addClass('hasImage');
}
});
</script>

<script>
// <!-- SCROLL TO REVIEWS IN TABS AND MAKE ACTIVE WHEN REVIEW LINK UP TOP IS CLICKED -->
$( "span.productView-reviewLink.scroll-to-view > a" ).on ('click', function() {
	$('html,body').animate({
              scrollTop: $(".productView-description").offset().top
            }, 1000);
            $(".product-reviews.ui-accordion-header").trigger("click");
            return false;
});
</script>

<script>
// <!-- SCROLL TO REVIEWS IN TABS AND MAKE ACTIVE WHEN REVIEW LINK UP TOP IS CLICKED -->
$(window).on("load", function(){
if (window.location.href.indexOf("#product-reviews") > -1) {
	$('html,body').animate({
              scrollTop: $(".productView-description").offset().top
            }, 2000);
            // return false;
}
// $(".product-reviews.ui-accordion-header").trigger("click");
});
</script>

<script>
$(document).ready(function() {
$('.mega-cat-nav .container-header.btn').on ('click', function() {
  $(this).toggleClass('active');
  $('.mega-cat-nav').toggleClass('active');
  $('.mega-cat-dropdown').toggle("fade", 300);
  // $('.mega-cat-dropdown').slideToggle();
  $('.second-level-flyout').removeClass('active-flyout');
});
});
</script>

<script>
  $('a.navPages-action.navPages-action-depth-max.has-subMenu.is-root.second-level-parent').hover(function() {
        $(this).next('.navPage-subMenu-horizontal.second-level-flyout').toggleClass('active');
        // $('.navPage-subMenu-horizontal.second-level-flyout').toggleClass('hide-fast');
        // $(this).next('.navPage-subMenu-horizontal.second-level-flyout').removeClass('hide-fast');
    });

    $('.mega-cat-dropdown a.navPages-action.single-level').hover(function() {
          // $('.navPage-subMenu-horizontal.second-level-flyout').toggleClass('hide-fast');
      });

$( ".mega-cat-dropdown" ).on("mousemove", function() {
  // console.log("mouse is moving across mega nav drop-down");
  $('#menu .mega-cat-dropdown .navPages-action.sideNavTopLevel').addClass('deactivate');
  // $('#menu.fixed .mega-cat-dropdown .navPages-action.sideNavTopLevel').addClass('deactivate');
  // $('.mega-cat-dropdown').off('hover', '.navPages-action');
  // $('.navPages-action').off('mouseenter mouseleave');
});

var timeout = null;
$(document).on('mousemove', function() {
    clearTimeout(timeout);
    timeout = setTimeout(function() {
        // console.log('Mouse idle for .25 sec');
        $('#menu .mega-cat-dropdown .navPages-action.sideNavTopLevel').removeClass('deactivate');
        // $('#menu.fixed .mega-cat-dropdown .navPages-action.sideNavTopLevel').removeClass('deactivate');
    }, 50);
});

// CLOSE MEGA NAV IF CLICKING OUTSIDE OF IT
$(document).click(function(event) {
  if($('div').not('.mega-cat-nav')) {
         $(".mega-cat-nav li.navPages-item.navPages-item-page.container-header.btn.active").removeClass('active');
         $('.mega-cat-dropdown').hide();
         $('.mega-cat-nav').removeClass('active');
         $('#shopnav-dim-page').removeClass('active');
         $('.second-level-flyout').removeClass('active-flyout');
         // $('header.header').toggleClass('active-mega-cat-nav');
				 event.stopPropagation();
    }
});

  if($(window).innerWidth() > 800) {
  var $navHeight = $('.nav-right-fixed .nav-right').height();
  // console.log($navHeight);
  var $pageListHeight = $('.sticky-navpages').height();
  // console.log($pageListHeight);
  // cache the element
  var $navBar = $('#menu');
  // find original navigation bar position
  var navPos = $navBar.offset().top;
  // on scroll
  $(window).scroll(function() {
      // get scroll position from top of the page
      var scrollPos = $(this).scrollTop();
      // check if scroll position is >= the nav position
      if (scrollPos >= navPos) {
          $('nav.navUser').insertAfter('.mega-cat-nav');
          $navBar.addClass('fixed');
          $('div#menu-wrapper').addClass('fixed');
          $('#menu .nav-page-list.two').addClass('hidden');
          $('body').addClass("fixed-nav");
          $('body.fixed-nav .body').css('margin-top', $navHeight);
      } else {
          $('nav.navUser').insertAfter('.header-logo');
          $navBar.removeClass('fixed');
          $('div#menu-wrapper').removeClass('fixed');
          $('#menu .nav-page-list.two').removeClass('hidden');
          $('body').removeClass("fixed-nav");
          $('body .body').css('margin-top', 15);
      }
  });
}





if($(window).innerWidth() > 800) {
var $navHeight = $('.nav-right-fixed .nav-right').height();
// console.log($navHeight);
var $pageListHeight = $('.sticky-navpages').height();
// console.log($pageListHeight);
// cache the element
var $navBar = $('#menu');
// find original navigation bar position
var navPos = $navBar.offset().top;
// on scroll
$(window).scroll(function() {
    // get scroll position from top of the page
    var scrollPos = $(this).scrollTop();
    // check if scroll position is >= the nav position
    if (scrollPos >= navPos) {
        $('nav.navUser').insertAfter('.mega-cat-nav');
        $navBar.addClass('fixed');
        $('div#menu-wrapper').addClass('fixed');
        $('#menu .nav-page-list.two').addClass('hidden');
        $('body').addClass("fixed-nav");
        $('body.fixed-nav .body').css('margin-top', $navHeight);
    } else {
        $('nav.navUser').insertAfter('.header-logo');
        $navBar.removeClass('fixed');
        $('div#menu-wrapper').removeClass('fixed');
        $('#menu .nav-page-list.two').removeClass('hidden');
        $('body').removeClass("fixed-nav");
        $('body .body').css('margin-top', 15);
    }
});
}


if($(window).innerWidth() > 800) {
  $(window).scroll(function() {
      // get scroll position from top of the page
      var scrollPos = $(this).scrollTop();
      // var navPos = $navBar.offset().top;
  if (scrollPos >= navPos) {
    $('#menu').addClass('fixed-again');
    $('div#menu-wrapper').addClass('fixed-again');
  } else {
    $('#menu').removeClass('fixed-again');
    $('div#menu-wrapper').removeClass('fixed-again');
  }
});
}

$(window).resize(function(){
if($(window).innerWidth() <= 800) {
// cache the element
var $navBar = $('.logo-user-section.container');
// find original navigation bar position
var $mobileMenu = $('.mobileMenu-toggle');
var navPos = $navBar.offset().top;
// on scroll
$(window).scroll(function() {
    // get scroll position from top of the page
    var scrollPos = $(this).scrollTop();
    // check if scroll position is >= the nav position
    if (scrollPos > navPos) {
        $navBar.addClass('fixed');
        $mobileMenu.addClass('fixed');
        // $('header').addClass('fixed');
    } else {
        $navBar.removeClass('fixed');
        $mobileMenu.removeClass('fixed');
        // $('header').removeClass('fixed');
    }
});
}
});

if($(window).innerWidth() <= 800) {
// cache the element
var $navBar = $('.logo-user-section.container');
// find original navigation bar position
var $mobileMenu = $('.mobileMenu-toggle');
var navPos = $navBar.offset().top;
// on scroll
$(window).scroll(function() {
    // get scroll position from top of the page
    var scrollPos = $(this).scrollTop();
    // check if scroll position is >= the nav position
    if (scrollPos > navPos) {
        $navBar.addClass('fixed');
        $mobileMenu.addClass('fixed');
        // $('header').addClass('fixed');
    } else {
        $navBar.removeClass('fixed');
        $mobileMenu.removeClass('fixed');
        // $('header').removeClass('fixed');
    }
});
}



$(window).resize(function(){
if($(window).innerWidth() <= 800) {
  $(window).scroll(function() {
      // get scroll position from top of the page
      var scrollPos = $(this).scrollTop();
      // var $navBar = $('.logo-user-section.container');
      // find original navigation bar position

      // var navPos = $navBar.offset().top;
  if (scrollPos > navPos) {
    // $('header').addClass('fixed');
    // $('.logo-user-section.container').addClass('fixed-again');
    $('.logo-user-section.container').addClass('fixed-again');
    $('.mobileMenu-toggle').addClass('fixed-again');
    $('nav.navUser').insertAfter('.header-logo');
    $('.logo-user-section.container.fixed').css('z-index', '999999');
  } else {
    // $('header').removeClass('fixed');
    // $('.logo-user-section.container').removeClass('fixed-again');
    $('.logo-user-section.container').removeClass('fixed-again');
    $('.mobileMenu-toggle').removeClass('fixed-again');
  }
});
}
});

if($(window).innerWidth() <= 800) {
  $(window).scroll(function() {
      // get scroll position from top of the page
      var scrollPos = $(this).scrollTop();
      // var $navBar = $('.logo-user-section.container');
      // find original navigation bar position

      // var navPos = $navBar.offset().top;
  if (scrollPos > navPos) {
    // $('header').addClass('fixed');
    // $('.logo-user-section.container').addClass('fixed-again');
    $('.logo-user-section.container').addClass('fixed-again');
    $('.mobileMenu-toggle').addClass('fixed-again');
  } else {
    // $('header').removeClass('fixed');
    // $('.logo-user-section.container').removeClass('fixed-again');
    $('.logo-user-section.container').removeClass('fixed-again');
    $('.mobileMenu-toggle').removeClass('fixed-again');
  }
});
}


  if ($navHeight < 90){
    $('#menu-wrapper').addClass('single-line');
  }
	//Click Logo To Scroll To Top
  $( "li.navPages-item.sticky-object.logo a" ).click(function( event ) {
  				event.preventDefault();
	});

  $( "a.navUser-action.navUser-action--quickSearch" ).click(function( event ) {
  				event.preventDefault();
	});

  $( "a.navUser-action.navUser-action--currencySelector.has-dropdown" ).click(function( event ) {
          event.preventDefault();
  });


$(document).ready(function(){
  $(".page.blog .blog-title a").text(function(index, currentText) {
  var maxLength = $(this).attr('data-maxlength');
  if(currentText.length >= maxLength) {
    return currentText.substr(0, maxLength) + "...";
  } else {
    return currentText
  }
});
});

$(document).ready(function(){
  $(".page.blog .blog-date, .page.blog .blog-author").text(function(index, currentText) {
  var maxLength = $(this).attr('data-maxlength');
  if(currentText.length >= maxLength) {
    return currentText.substr(0, maxLength) + "...";
  } else {
    return currentText
  }
});
});

    // $('#menu li.navPages-item.navPages-item-page.container-header.btn a.navPages-action').on ('click', function() {
    //     $('#shopnav-dim-page').toggleClass('active');
    //     $('header.header').toggleClass('active-mega-cat-nav');
    //     $('#menu').toggleClass('active-mega-cat-nav');
    // });

  // $( "#menu li.navPages-item.navPages-item-page.container-header.btn a.navPages-action" ).hover(function() {
  //   $('.mega-cat-dropdown').slideToggle();
  // });

    $('#menu li.navPages-item.navPages-item-page.container-header.btn a.navPages-action').on ('click', function() {
        $('#shopnav-dim-page').toggleClass('active');
        $('header.header').toggleClass('active-mega-cat-nav');
        $('#menu').toggleClass('active-mega-cat-nav');
    });

  $(document).ready(function() {
  $('#menu').on ('click', function() {
  $('.navPages-container').toggleClass('active-mega-cat-nav');
  // console.log('click');
  // $(".mega-cat-nav li.navPages-item.navPages-item-page.container-header.btn.active").removeClass('active');
  // $('.mega-cat-dropdown').hide();
  // $('.mega-cat-nav').removeClass('active');
  // $('#shopnav-dim-page').removeClass('active');
});
});

$(document).ready(function() {
	var $myDiv = $('#shopnav-dim-page');
	    if ( $myDiv.length){
				var id = '#dialog';
				var maskHeight = $(document).height();
				var maskWidth = $(window).width();
				$('#mask').css({'width':maskWidth,'height':maskHeight});
				$('#mask').fadeIn(500);
				$('#mask').fadeTo("slow",0.6);
				var winH = $(window).height();
				var winW = $(window).width();
							$(id).css('top',  winH/2-$(id).height()/2-155);
				$(id).css('left', winW/2-$(id).width()/2-35);
					 $(id).fadeIn(2000);
					 $('.window .close').click(function (e) {
				e.preventDefault();
				$('#mask').hide();
				$('.window').hide();
					 });
					 $('#mask').click(function () {
				    $(this).hide();
				    $('.window').hide();
			 });
	    }
});

$(document).ready(function() {
    $('a.navPages-action.navPages-action-depth-max.has-subMenu.is-root.topLevel').hover(
        function () {
            $(this).addClass('active');
            $(this).siblings('div#menu .navPage-subMenu').show();
            // $('#menu').addClass('show-overflow');
        },
        function () {
            $(this).siblings('div#menu .navPage-subMenu').hide();
            $(this).removeClass('active');

        }
    );

    $('div#menu .navPage-subMenu').hover(
        function () {
            $(this).prev('a.navPages-action.navPages-action-depth-max.has-subMenu.is-root.topLevel').addClass('active')
        },
        function () {
            $(this).prev('a.navPages-action.navPages-action-depth-max.has-subMenu.is-root.topLevel').removeClass('active')
        }
    );
  });

$('.navUser-action').on ('click', function() {
  $(this).next('.dropdown-menu').toggleClass("active");
});

  $('.quickSearchResults').on('click', function() {
    // console.log('click-close');
    $('.quickSearchResults').fadeOut();
  });

    $(document).on('click', '.quickSearchResults .modal-close', function() {
      // console.log('click-close');
      $('.quickSearchResults').fadeOut();
    });

    $('.dropdown--quickSearch .form-input').on('click', function() {
      $('.quickSearchResults').fadeIn();
    });

    if($(window).innerWidth() > 800) {
	    $(document).click(function(){
        $( "a.navUser-action.navUser-action--quickSearch" ).click(function( event ) {
          event.preventDefault();
          $('#quickSearch form.form').trigger('submit');
        });
	    });
    }

$(window).resize(function(){
    if($(window).innerWidth() > 800) {
	    $(document).click(function(){
        $( "a.navUser-action.navUser-action--quickSearch" ).click(function( event ) {
          event.preventDefault();
          $('#quickSearch form.form').trigger('submit');
        });
	    });
    }
  });






  $(window).resize(function(){
      if($(window).innerWidth() <= 800) {
        $('div#quickSearch').removeClass('desktop');
  	    $('div#quickSearch').addClass('mobile');
      } else {
        $('div#quickSearch').addClass('desktop');
  	    $('div#quickSearch').removeClass('mobile');
      }
    });

  // $(window).resize(function(){
  //   if($(window).innerWidth() <= 800) {
  //     $('.mobileMenu-toggle').addClass('fixed fixed-again');
  //     $('.logo-user-section.container').addClass('fixed fixed-again');
  //   }
  // });







    $(document).click(function(event) {
      if($('div').not('#menu.fixed li.navUser-item.user-icons a.navUser-action')) {
        $('.dropdown-menu').removeClass("active");
        $('div#cart-preview-dropdown').fadeOut();
        // $('.quickSearchResults').fadeOut();
        event.stopPropagation();
      }
      });


  $(document).ready(function() {
      $('#menu .mega-cat-dropdown .navPages-item.top-level .navPages-action.second-level-parent').mouseenter(function() {
          // remove any existing 'po' classes and add the 'przed' class back
          $('.active-parent-link').removeClass('active-parent-link').addClass('nonactive-parent-link');
          $('.active-flyout').removeClass('active-flyout').addClass('inactive-flyout');
          // for the element just hovered over, remove the 'przed' class and add 'po'
          $(this).removeClass('nonactive-parent-link').addClass('active-parent-link');
          $(this).next('.navPage-subMenu-horizontal.second-level-flyout').removeClass('inactive-flyout').addClass('active-flyout');

      });
  });


  $(document).ready(function() {
      $('#menu .mega-cat-dropdown .navPages-item.top-level .navPages-action.single-level').mouseenter(function() {
          // remove any existing 'po' classes and add the 'przed' class back
          $('.active-parent-link').removeClass('active-parent-link').addClass('nonactive-parent-link');
          $('.active-flyout').removeClass('active-flyout').addClass('inactive-flyout');
          // for the element just hovered over, remove the 'przed' class and add 'po'
      });
  });

  $(document).ready(function() {
      $('#menu .mega-cat-dropdown .nav-page-list.mega-nav-page-list').mouseenter(function() {
          // remove any existing 'po' classes and add the 'przed' class back
          $('.active-parent-link').removeClass('active-parent-link').addClass('nonactive-parent-link');
          $('.active-flyout').removeClass('active-flyout').addClass('inactive-flyout');
          // for the element just hovered over, remove the 'przed' class and add 'po'
      });
  });


// <!-- GET HEIGHT OF TALLEST PAGE IN DROPDOWN AND SET THE SIBLINGS TO MATCH - FOR PAGINATOR TO WORK -->
  $(document).ready(function() {
    $('.mega-cat-nav .container-header.btn').click(function() {
         $('.mega-cat-dropdown div#page-wrapper .category-list .page').each(function(i) {
         var maxHeight = 0;
         maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
         // console.log(maxHeight);
         $('.mega-cat-dropdown div#page-wrapper .category-list .page').height(maxHeight);
         $('#menu .mega-cat-dropdown .has-subMenu.is-root + .navPage-subMenu-horizontal.second-level-flyout').css('min-height', maxHeight+50);
       });

       var activeDropDownPageHeight = 0;
       $('.mega-cat-dropdown div#page-wrapper .category-list .page').each(function(i) {
         var activeDropDownPageHeight = $(this).find('div#page-wrapper .category-list .page.active-page').height();
         // console.log(activePageHeight);
         var inactiveDropDownPages = $(this).find('div#page-wrapper .category-list .page.inactive-page');
         // console.log(inactivePages);
         $(inactiveDropDownPages).css("margin-top", - activeDropDownPageHeight);
       });
       $('.mega-cat-dropdown div#page-wrapper .category-list .page').removeClass('active-page').addClass('inactive-page');
       $('.mega-cat-dropdown div#page-wrapper .category-list .page:first').removeClass('inactive-page').addClass('active-page');
       // $('.mega-cat-dropdown div#page-wrapper .category-list .page.inactive-page .fader').fadeOut();
       // $('.mega-cat-dropdown div#page-wrapper .category-list .page.active-page .fader').fadeIn();
       $('.mega-cat-dropdown div#page-wrapper .pagination-container a.navPages-action.paginator').removeClass('active-page').addClass('inactive-page');
       $('.mega-cat-dropdown div#page-wrapper .pagination-container a.navPages-action.paginator:first').removeClass('inactive-page').addClass('active-page');
     });
 });


// <!-- GET HEIGHT OF TALLEST PAGE IN MOBILE DROPDOWN AND SET THE SIBLINGS TO MATCH - FOR PAGINATOR TO WORK -->
  $(document).ready(function() {
    $('.mobileMenu-toggle').click(function() {
         $('.mega-cat-dropdown div#page-wrapper .category-list .page').each(function(i) {
         var maxHeight = 0;
         maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
         // console.log(maxHeight);
         $('.mega-cat-dropdown div#page-wrapper .category-list .page').height(maxHeight);
       });

       var activeDropDownPageHeight = 0;
       $('.mega-cat-dropdown div#page-wrapper .category-list .page').each(function(i) {
         var activeDropDownPageHeight = $(this).find('div#page-wrapper .category-list .page.active-page').height();
         // console.log(activePageHeight);
         var inactiveDropDownPages = $(this).find('div#page-wrapper .category-list .page.inactive-page');
         // console.log(inactivePages);
         $(inactiveDropDownPages).css("margin-top", - activeDropDownPageHeight);
       });
       $('.mega-cat-dropdown div#page-wrapper .category-list .page').removeClass('active-page').addClass('inactive-page');
       $('.mega-cat-dropdown div#page-wrapper .category-list .page:first').removeClass('inactive-page').addClass('active-page');
       // $('.mega-cat-dropdown div#page-wrapper .category-list .page.inactive-page .fader').fadeOut();
       // $('.mega-cat-dropdown div#page-wrapper .category-list .page.active-page .fader').fadeIn();
       $('.mega-cat-dropdown div#page-wrapper .pagination-container a.navPages-action.paginator').removeClass('active-page').addClass('inactive-page');
       $('.mega-cat-dropdown div#page-wrapper .pagination-container a.navPages-action.paginator:first').removeClass('inactive-page').addClass('active-page');
     });
 });

$(document).ready(function() {
  $('a.navUser-action.navUser-action--quickSearch.desktop-toggle').on("click", function(){
      // $('header.header').addClass('is-open');
      $('header.header').addClass('quick-search-is-open');
      $('.mobileMenu-toggle').addClass("is-open");
      $(".mobileMenu-toggle").attr("aria-expanded","true");
  });
});

  $(document).ready(function() {
    $('.quickSearch-mobileToggle').click(function(e){
        // $('header.header').removeClass('is-open');
        $('header.header').removeClass('quick-search-is-open');
        $('.mobileMenu-toggle').removeClass("is-open");
        $(".mobileMenu-toggle").attr("aria-expanded","false");
        $('.dropdown--quickSearch.is-open').removeClass('is-open');


    });
  });

$(document).ready(function() {
      $(document).click(function(){
        $( "a.navUser-action.navUser-action--quickSearch.mobile-submit" ).on("click", function(){
          // event.preventDefault();
          $('#quickSearch form.form').trigger('submit');
        });
      });

  });

  $(document).ready(function() {
    if($(window).innerWidth() < 800) {
      // $('.mega-cat-dropdown').prependTo('#menu-wrapper');
    }
  });

  $(document).ready(function() {
    $(window).resize(function(){
    if($(window).innerWidth() < 800) {
      // $('.mega-cat-dropdown').prependTo('#menu-wrapper');
    }
  });
  });

// <!-- MOBILE - CLOSE ALL OPEN SUBCATEGORIES WHEN MENU TOGGLE IS CLICKED -->
// $(window).resize(function(){
if($(window).innerWidth() <= 800) {
	    $(document).ready(function() {
        $( "a.mobileMenu-toggle" ).click(function( event ) {
          $('.flyout.page').css('height','auto');
          $('.mega-cat-dropdown div#page-wrapper .category-list .page.active-page').css('height', 'auto');
          $('.mega-cat-dropdown li.navPages-item').removeClass('mobile-parent-active');
          $('.mega-cat-dropdown .has-subMenu.is-root + .navPage-subMenu-horizontal.second-level-flyout').slideUp();
          $(".mega-cat-dropdown").animate({ scrollTop: 0 }, 300);
        });
	    });
    }
  // });

// <!-- DESKTIOP - CLOSE ALL OPEN SUBCATEGORIES WHEN PAGINATION IS CLICKED -->
// $(window).resize(function(){
if($(window).innerWidth() > 800) {
	    $(document).ready(function() {
        $( ".mega-cat-dropdown a.navPages-action.paginator" ).click(function( event ) {
          $('.mega-cat-dropdown li.navPages-item').removeClass('mobile-parent-active');
          $('.mega-cat-dropdown .has-subMenu.is-root + .navPage-subMenu-horizontal.second-level-flyout').slideUp();
          $(".mega-cat-dropdown").animate({ scrollTop: 0 }, 300);
        });
	    });
    }
  // });

// <!-- MOBILE - CLOSE ALL OPEN SUBCATEGORIES WHEN PAGINATION IS CLICKED -->
// $(window).resize(function(){
if($(window).innerWidth() <= 800) {
	    $(document).ready(function() {
        $( ".mega-cat-dropdown a.navPages-action.paginator" ).click(function( event ) {
          $('.mega-cat-dropdown li.navPages-item').removeClass('mobile-parent-active');
          $('.mega-cat-dropdown .has-subMenu.is-root + .navPage-subMenu-horizontal.second-level-flyout').slideUp();
          $(".mega-cat-dropdown").animate({ scrollTop: 0 }, 0);
        });
	    });
    }
  // });

// $(window).resize(function(){
if($(window).innerWidth() <= 800) {
	    $(document).ready(function() {
        $( ".mega-cat-dropdown .category-list li.top-level i.icon.navPages-action-moreIcon.topLevel" ).click(function( event ) {
          $('.flyout.page').css('height','auto');
          $('.mega-cat-dropdown div#page-wrapper .category-list .page.active-page').css('height', 'auto');
          $(this).parents('li.navPages-item.top-level').toggleClass('mobile-parent-active');
          $(this).parents('li.navPages-item.top-level').find('i.icon.navPages-action-moreIcon').toggleClass('mobile-icon-active');
          $(this).parents('li.navPages-item.top-level').find('.second-level-flyout').slideToggle();
          event.preventDefault();
        });
	    });
    }
  // });

$(document).ready(function() {
  if($(window).innerWidth() <= 800) {
    $( ".mega-cat-dropdown .category-list i.icon.navPages-action-moreIcon.second-level" ).click(function( event ) {
      $(this).parents('li.navPage-subMenu-item-child.second-level').toggleClass('mobile-parent-active');
      $(this).parents('li.navPage-subMenu-item-child.second-level').find('i.icon.navPages-action-moreIcon').toggleClass('mobile-icon-active');
      $(this).parents('li.navPage-subMenu-item-child.second-level').find('.third-level-flyout').slideToggle();
      event.preventDefault();
    });
  }
});


// NAVPAGES FIX
$(document).ready(function() {
  if($(window).innerWidth() <= 800) {
    $( "#menu .mega-cat-dropdown i.mega-nav-pages" ).click(function( event ) {
      // $(this).parents('li.navPages-item.top-level.mega-nav-pages').toggleClass('mobile-parent-active');
      // $(this).parents('li').find('ul:first').toggleClass('activeDropDown');
      $(this).parents('li').find('i.mega-nav-pages:first').toggleClass('mobile-icon-active');
    //   if ($('li.navPages-item.top-level.mega-nav-pages').hasClass('mobile-parent-active')) {
    //     $(this).parents('li.navPages-item.top-level.mega-nav-pages').find('i.icon.navPages-action-moreIcon').addClass('mobile-icon-active');
        $(this).parents('li.navPages-item.top-level.mega-nav-pages').find('.second-level-flyout').toggleClass('visible').slideToggle();
    // } else {
    //   // $(this).parents('li.navPages-item.top-level.mega-nav-pages').find('.second-level-flyout').slideUp();
    //   // $(this).parents('li.navPages-item.top-level.mega-nav-pages').find('i.icon.navPages-action-moreIcon').removeClass('mobile-icon-active');
    // }
      event.preventDefault();
    });
  }
});

$(document).ready(function() {
  if($(window).innerWidth() <= 800) {
    $('.productView-images').insertBefore('.productView-info');
  }
});

// <!-- ACCOUNT DROP-DOWN -->
$(document).click(function(event) {
  if ( !$(event.target).hasClass('signout-list')) {
       $("div#account-dropdown-signout-list").hide();
       event.stopPropagation();
  }
});

// <!-- SIGN-OUT DROPDOWN -->
$('li.navUser-item.navUser-item--account.user-icons.account').hover(function(e){
$('div#account-dropdown-signout-list').toggleClass('visible');
$('div#cart-preview-dropdown.dropdown-menu.is-open.f-open-dropdown').hide();
// e.preventDefault();
// e.stopPropagation();
});

// <!-- SIGN-IN DROPDOWN -->
$('li.navUser-item.navUser-item--account.user-icons.account').hover(function(e){
$('div#account-dropdown-signin-list').toggleClass('visible');
$('div#cart-preview-dropdown.dropdown-menu.is-open.f-open-dropdown').hide();
// e.preventDefault();
// e.stopPropagation();
});

$('.navUser-action.account .dropdown-menu').hover(function(e){
  $(this).addClass('visible');
});

$(document).click(function(event) {
  if ( !$(event.target).hasClass('signin-register')) {
       $("div#account-dropdown-signin-register").hide();
       event.stopPropagation();
  }
});

$('.navUser-action.account.signin-register').click(function(e){
$('div#account-dropdown-signin-register').toggle();
$('div#cart-preview-dropdown.dropdown-menu.is-open.f-open-dropdown').hide();
e.preventDefault();
e.stopPropagation();
});

$(document).ready(function(){
  $('.dropdown-menu.signout-list a.signout-list:contains("(undefined)")').each(function() {
    var newText = $(this).html().replace("(undefined)", "<span class='hidden'></span>");
    $(this).html(newText);
});
});

// <!-- DYNAMICALLY ADD A PAGE NUMBER TO EACH FLYOUT -->
 $(document).ready(function() {
   $('.navPage-subMenu-list.all-second-level-plus-container.flyout-page-wrapper').each(function(i) {
     i = 0;
     $(this).children('div.flyout.page').each(function() {
     // console.log($this);
     // var activePageNumber = $(this).index() + 1;
     var newClass = "page" + i++;
     // console.log(newClass);
     $(this).addClass(newClass);
   });
 });
});

// <!-- DYNAMICALLY ADD A PAGINATION DOT FOR EACH PAGE IN FLYOUT -->
 $(document).ready(function() {
   $('.navPage-subMenu.navPage-subMenu-horizontal.second-level-flyout').each(function(i) {
     var flyoutPages = $(this).find('.flyout-page-wrapper .page').length;
     // console.log(flyoutPages);
     if (flyoutPages > 1) {
       $(this).find('.flyout-pagination-container.bottom span.dots').addClass('visible');
       for (i=0; i < flyoutPages; i++) {
         $(this).find('.flyout-pagination-container.bottom span.dots').append('<a class="navPages-action paginator page'+i+'"> '+(i+1)+' </a>');
       }
     }
   });
});

  $(document).ready(function() {
    var totalPageBtns = $('.flyout-page-wrapper a.navPages-action.paginator').length;
    // console.log(totalPageBtns);
    $('.flyout-pagination-container.bottom a.navPages-action.paginator').on ('click', function() {
    var activePageNumber = $(this).index();
    // console.log(activePageNumber);

    $('.navPage-subMenu.navPage-subMenu-horizontal.second-level-flyout.active-flyout').each(function(i) {
      var firstPage = $(this).find('.flyout.page:first').addClass('first');
      var lastPage = $(this).find('.flyout.page:last').addClass('last');
    // FIRST PAGE ACTIVE - DEACTIVE PREVIOUS ARROW
    if ( ($(firstPage).hasClass("active-page")) && ($(lastPage).hasClass("inactive-page"))  ){
      $('.flyout-pagination-container.top a.navPages-action.next').removeClass('inactive').addClass('active');
      $('.flyout-pagination-container.top a.navPages-action.previous').removeClass('active').addClass('inactive');
      // console.log("FirstPage-Active & LastPage-Inactive");
    }
    // FIRST & LAST PAGE INACTIVE - ACTIVATE BOTH PREVIOUS & NEXT ARROWS
    if ( ($(this).find(firstPage).hasClass("inactive-page")) && ($(this).find(lastPage).hasClass("inactive-page"))  ){
      $('.flyout-pagination-container.top a.navPages-action.next').removeClass('inactive').addClass('active');
      $('.flyout-pagination-container.top a.navPages-action.previous').removeClass('inactive').addClass('active');
      // console.log("First & Last Page are inactive");
    }
    // LAST PAGE ACTIVE - DEACTIVATE NEXT ARROW
    if ( ($(this).find(firstPage).hasClass("inactive-page")) && ($(this).find(lastPage).hasClass("active-page"))  ){
      $('.flyout-pagination-container.top a.navPages-action.next').removeClass('active').addClass('inactive');
      $('.flyout-pagination-container.top a.navPages-action.previous').removeClass('inactive').addClass('active');
      // console.log("FirstPage-Inactive & LastPage-Active");
    }
    // var activePageHeight = -1;
    // $('.navPage-subMenu.navPage-subMenu-horizontal.second-level-flyout.active-flyout').each(function(i) {
    //   var activePageHeight = $(this).find('div.flyout.page.active-page').height();
    //   // console.log(activePageHeight);
    // });
  });
  });
  });

// <!-- SHOW PREV / NEXT PAGINATION IN FLYOUT IF MORE THAN 1 PAGE -->
      $(document).ready(function() {
        $('li.navPages-item.top-level.categories').each(function(i) {
        var flyoutPages = $(this).find('.flyout-page-wrapper .page').length;
        if (flyoutPages > 1) {
          $(this).find('.flyout-pagination-container.top').addClass('visible');
        }
      });
    });

// <!-- NEXT FLYOUT PAGE -->
     $(document).ready(function() {
       // $('.navPage-subMenu.navPage-subMenu-horizontal.flyout.second-level').each(function(i) {
       //   var flyoutPages = $(this).find('.flyout-page-wrapper .page').length;
       //   console.log(flyoutPages);
         $('.flyout-pagination-container.top a.navPages-action.next').click(function(){
           // console.log('click');
           var activePage = $('.flyout.page.active-page');
           $('.flyout.page.active-page').addClass('inactive-page').removeClass('active-page');
           $(activePage).next('div.flyout.page').removeClass('inactive-page').addClass('active-page');
           var activePageDot = $('.navPage-subMenu-horizontal.second-level-flyout a.navPages-action.paginator.active-page');
           $('.navPage-subMenu-horizontal.second-level-flyout a.navPages-action.paginator.active-page').addClass('inactive-page').removeClass('active-page');
           $(activePageDot).next('.navPage-subMenu-horizontal.second-level-flyout a.navPages-action.paginator').removeClass('inactive-page').addClass('active-page');
           $('.flyout-page-wrapper .page.active-page .fader').fadeIn();
           $('.flyout-page-wrapper .page.inactive-page .fader').hide();

           $('.navPage-subMenu.navPage-subMenu-horizontal.second-level-flyout.active-flyout').each(function(i) {
             var firstPage = $(this).find('.flyout.page:first').addClass('first');
             var lastPage = $(this).find('.flyout.page:last').addClass('last');
           // FIRST PAGE ACTIVE - DEACTIVE PREVIOUS ARROW
           if ( ($(firstPage).hasClass("active-page")) && ($(lastPage).hasClass("inactive-page"))  ){
             $('.flyout-pagination-container.top a.navPages-action.next').removeClass('inactive').addClass('active');
             $('.flyout-pagination-container.top a.navPages-action.previous').removeClass('active').addClass('inactive');
             // console.log("FirstPage-Active & LastPage-Inactive");
           }
           // FIRST & LAST PAGE INACTIVE - ACTIVATE BOTH PREVIOUS & NEXT ARROWS
           if ( ($(this).find(firstPage).hasClass("inactive-page")) && ($(this).find(lastPage).hasClass("inactive-page"))  ){
             $('.flyout-pagination-container.top a.navPages-action.next').removeClass('inactive').addClass('active');
             $('.flyout-pagination-container.top a.navPages-action.previous').removeClass('inactive').addClass('active');
             // console.log("First & Last Page are inactive");
           }
           // LAST PAGE ACTIVE - DEACTIVATE NEXT ARROW
           if ( ($(this).find(firstPage).hasClass("inactive-page")) && ($(this).find(lastPage).hasClass("active-page"))  ){
             $('.flyout-pagination-container.top a.navPages-action.next').removeClass('active').addClass('inactive');
             $('.flyout-pagination-container.top a.navPages-action.previous').removeClass('inactive').addClass('active');
             // console.log("FirstPage-Inactive & LastPage-Active");
           }
           // var activePageHeight = -1;
           // $('.navPage-subMenu.navPage-subMenu-horizontal.second-level-flyout.active-flyout').each(function(i) {
           //   var activePageHeight = $(this).find('div.flyout.page.active-page').height();
           //   // console.log(activePageHeight);
           // });
         });
     });
    });

    // <!-- PREVIOUS FLYOUT PAGE -->
     $(document).ready(function() {
       // $('.navPage-subMenu.navPage-subMenu-horizontal.flyout.second-level').each(function(i) {
       //   var flyoutPages = $(this).find('.flyout-page-wrapper .page').length;
       //   console.log(flyoutPages);
         $('.flyout-pagination-container.top a.navPages-action.previous').click(function(){
           // console.log('click');
           var activePage = $('.flyout.page.active-page');
           $('.flyout.page.active-page').addClass('inactive-page').removeClass('active-page');
           $(activePage).prev('div.flyout.page').removeClass('inactive-page').addClass('active-page');
           var activePageDot = $('.navPage-subMenu-horizontal.second-level-flyout a.navPages-action.paginator.active-page');
           $('.navPage-subMenu-horizontal.second-level-flyout a.navPages-action.paginator.active-page').addClass('inactive-page').removeClass('active-page');
           $(activePageDot).prev('.navPage-subMenu-horizontal.second-level-flyout a.navPages-action.paginator').removeClass('inactive-page').addClass('active-page');
           $('.flyout-page-wrapper .page.active-page .fader').fadeIn();
           $('.flyout-page-wrapper .page.inactive-page .fader').hide();

           $('.navPage-subMenu.navPage-subMenu-horizontal.second-level-flyout.active-flyout').each(function(i) {
             var firstPage = $(this).find('.flyout.page:first').addClass('first');
             var lastPage = $(this).find('.flyout.page:last').addClass('last');
           // FIRST PAGE ACTIVE - DEACTIVE PREVIOUS ARROW
           if ( ($(firstPage).hasClass("active-page")) && ($(lastPage).hasClass("inactive-page"))  ){
             $('.flyout-pagination-container.top a.navPages-action.next').removeClass('inactive').addClass('active');
             $('.flyout-pagination-container.top a.navPages-action.previous').removeClass('active').addClass('inactive');
             // console.log("FirstPage-Active & LastPage-Inactive");
           }
           // FIRST & LAST PAGE INACTIVE - ACTIVATE BOTH PREVIOUS & NEXT ARROWS
           if ( ($(this).find(firstPage).hasClass("inactive-page")) && ($(this).find(lastPage).hasClass("inactive-page"))  ){
             $('.flyout-pagination-container.top a.navPages-action.next').removeClass('inactive').addClass('active');
             $('.flyout-pagination-container.top a.navPages-action.previous').removeClass('inactive').addClass('active');
             // console.log("First & Last Page are inactive");
           }
           // LAST PAGE ACTIVE - DEACTIVATE NEXT ARROW
           if ( ($(this).find(firstPage).hasClass("inactive-page")) && ($(this).find(lastPage).hasClass("active-page"))  ){
             $('.flyout-pagination-container.top a.navPages-action.next').removeClass('active').addClass('inactive');
             $('.flyout-pagination-container.top a.navPages-action.previous').removeClass('inactive').addClass('active');
             // console.log("FirstPage-Inactive & LastPage-Active");
           }
           var activePageHeight = -1;
           $('.navPage-subMenu.navPage-subMenu-horizontal.second-level-flyout.active-flyout').each(function(i) {
             var activePageHeight = $(this).find('div.flyout.page.active-page').height();
             // console.log(activePageHeight);
           });
         });
     });
    });

      $(document).ready(function() {
      $('a.navPages-action.paginator').on ('click', function() {
          var activePageNumber = $(this).index();
          $(this).removeClass('inactive-page').toggleClass('active-page').siblings().removeClass('active-page').addClass('inactive-page');
          // console.log(activePageNumber);
          // console.log(this);
          $('.flyout-page-wrapper .page'+activePageNumber).removeClass('inactive-page').addClass('active-page').siblings().removeClass('active-page').addClass('inactive-page');
       });
     });

// <!-- FOOTER PREV / NEXT PAGINATION -->
// <!-- SHOW PREV / NEXT PAGINATION IN FOOTER IF MORE THAN 1 PAGE -->
      $(document).ready(function() {
        var footerCatPages = $('.categories-footer.page').length;
        if (footerCatPages > 1) {
          $('.footer-categories-pagination').show();
        }
      });
// <!-- NEXT FOOTER PAGE -->
     $(document).ready(function() {
      var firstPage = $('.categories-footer.page:first');
      var lastPage = $('.categories-footer.page:last');
       $(firstPage).addClass('first');
       $(lastPage).addClass('last');
       // SET PREVIOUS TO not-clickable on page load
       $('.footer-categories-pagination a.navPages-action.previous').addClass('not-clickable');

         $('.footer-categories-pagination a.navPages-action.next').click(function(){
           var activePage = $('.categories-footer.page.active-page');
           $('.categories-footer.page.active-page').addClass('inactive-page').removeClass('active-page');
           $(activePage).next('.categories-footer.page').removeClass('inactive-page').addClass('active-page');
           $('.categories-footer.page.active-page').fadeIn();
           $('.categories-footer.page.inactive-page').hide();

           $('.categories-footer.page').each(function(i) {
           // FIRST PAGE ACTIVE - DEACTIVE PREVIOUS ARROW
           if ( ($(firstPage).hasClass("active-page")) && ($(lastPage).hasClass("inactive-page"))  ){
             $('.footer-categories-pagination a.navPages-action.next').removeClass('not-clickable').addClass('clickable');
             $('.footer-categories-pagination a.navPages-action.previous').removeClass('clickable').addClass('not-clickable');
             // console.log("FirstPage-Active & LastPage-Inactive");
           }
           // FIRST & LAST PAGE INACTIVE - ACTIVATE BOTH PREVIOUS & NEXT ARROWS
           if ( ($(firstPage).hasClass("inactive-page")) && ($(lastPage).hasClass("inactive-page"))  ){
           // if ( ($(this).find(firstPage).hasClass("inactive-page")) && ($(this).find(lastPage).hasClass("inactive-page"))  ){
             $('.footer-categories-pagination a.navPages-action.next').removeClass('not-clickable').addClass('clickable');
             $('.footer-categories-pagination a.navPages-action.previous').removeClass('not-clickable').addClass('clickable');
             // console.log("First & Last Page are inactive");
           }
           // LAST PAGE ACTIVE - DEACTIVATE NEXT ARROW
           if ( ($(firstPage).hasClass("inactive-page")) && ($(lastPage).hasClass("active-page"))  ){
           // if ( ($(this).find(firstPage).hasClass("inactive-page")) && ($(this).find(lastPage).hasClass("active-page"))  ){
             $('.footer-categories-pagination a.navPages-action.next').removeClass('clickable').addClass('not-clickable');
             $('.footer-categories-pagination a.navPages-action.previous').removeClass('not-clickable').addClass('clickable');
             // console.log("FirstPage-Inactive & LastPage-Active");
           }
           // var activePageHeight = -1;
           // $('.navPage-subMenu.navPage-subMenu-horizontal.second-level-flyout.active-flyout').each(function(i) {
           //   var activePageHeight = $(this).find('div.flyout.page.active-page').height();
           //   // console.log(activePageHeight);
           // });
         });
     });
    });
    // <!-- PREVIOUS FOOTER PAGE -->
         $(document).ready(function() {
          var firstPage = $('.categories-footer.page:first');
          var lastPage = $('.categories-footer.page:last');
           // SET PREVIOUS TO not-clickable on page load
           $('.footer-categories-pagination a.navPages-action.previous').addClass('not-clickable');

             $('.footer-categories-pagination a.navPages-action.previous').click(function(){
               var activePage = $('.categories-footer.page.active-page');
               $('.categories-footer.page.active-page').addClass('inactive-page').removeClass('active-page');
               $(activePage).prev('.categories-footer.page').removeClass('inactive-page').addClass('active-page');
               $('.categories-footer.page.active-page').fadeIn();
               $('.categories-footer.page.inactive-page').hide();

               $('.categories-footer.page').each(function(i) {
               // FIRST PAGE ACTIVE - DEACTIVE PREVIOUS ARROW
               if ( ($(firstPage).hasClass("active-page")) && ($(lastPage).hasClass("inactive-page"))  ){
                 $('.footer-categories-pagination a.navPages-action.next').removeClass('not-clickable').addClass('clickable');
                 $('.footer-categories-pagination a.navPages-action.previous').removeClass('clickable').addClass('not-clickable');
                 // console.log("FirstPage-Active & LastPage-Inactive");
               }
               // FIRST & LAST PAGE INACTIVE - ACTIVATE BOTH PREVIOUS & NEXT ARROWS
               if ( ($(firstPage).hasClass("inactive-page")) && ($(lastPage).hasClass("inactive-page"))  ){
               // if ( ($(this).find(firstPage).hasClass("inactive-page")) && ($(this).find(lastPage).hasClass("inactive-page"))  ){
                 $('.footer-categories-pagination a.navPages-action.next').removeClass('not-clickable').addClass('clickable');
                 $('.footer-categories-pagination a.navPages-action.previous').removeClass('not-clickable').addClass('clickable');
                 // console.log("First & Last Page are inactive");
               }
               // LAST PAGE ACTIVE - DEACTIVATE NEXT ARROW
               if ( ($(firstPage).hasClass("inactive-page")) && ($(lastPage).hasClass("active-page"))  ){
               // if ( ($(this).find(firstPage).hasClass("inactive-page")) && ($(this).find(lastPage).hasClass("active-page"))  ){
                 $('.footer-categories-pagination a.navPages-action.next').removeClass('clickable').addClass('not-clickable');
                 $('.footer-categories-pagination a.navPages-action.previous').removeClass('not-clickable').addClass('clickable');
                 // console.log("FirstPage-Inactive & LastPage-Active");
               }
               // var activePageHeight = -1;
               // $('.navPage-subMenu.navPage-subMenu-horizontal.second-level-flyout.active-flyout').each(function(i) {
               //   var activePageHeight = $(this).find('div.flyout.page.active-page').height();
               //   // console.log(activePageHeight);
               // });
             });
         });
        });
        </script>


<script>
  $(window).on("load", function(){
  	$('li.navUser-item.currency-menu').addClass('visible');
  });
</script>

<script>
$("#accordion").accordion({
  heightStyle: "content",
  collapsible: true,
});
</script>

<script>
  $(document).on('touchend', 'button', function(e) {
        e.currentTarget.blur();
    });
</script>

<script>
  // <!-- HIDE BLOG IMAGES IF CATEGORY IMAGE IS NOT SET-->
$(document).ready(function(){
if($('.blog-image.uploaded').length) {
  $(".blog-post-figure").fadeIn();
}
});
// BLOG IMAGE VISIBILITY
$(window).on("load", function(){
if ($('.blog-image').hasClass('uploaded')) {
  $('.blog-post-figure').addClass('hasImage');
  $('article.blog').addClass('hasImage');
}
else {
  $('.blog-post-figure').addClass('noImage');
  $('article.blog').addClass('noImage');
}
});


// CUSTOM - SET FIGURE WIDTH TO EQUAL FIGURE HEIGHT TO KEEP FIGURE SQAURE
$(window).on("load", function(){
var blogImgHeight = $('figure.blog-thumbnail.blog-image.uploaded').height();
console.log(blogImgHeight);
$('.blog-image.placeholder-image').attr('style', 'min-height:' +blogImgHeight+ 'px !important');
});
// FOR WINDOW DRAGGERS & THEME EDITOR RESPONSIVE BUTTONS
window.addEventListener("resize", function() {
  var blogImgHeight = $('figure.blog-thumbnail.blog-image.uploaded').height();
  console.log(blogImgHeight);
  $('.blog-image.placeholder-image').attr('style', 'min-height:' +blogImgHeight+ 'px !important');
  }, 200);


  // <!-- GET HEIGHT OF TALLEST PAGE IN DROPDOWN AND SET THE SIBLINGS TO MATCH - FOR PAGINATOR TO WORK -->
    $(window).on("load", function(){
           $('article.blog').each(function(i) {
           var maxHeight = 0;
           maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
           console.log(maxHeight);
           $('article.blog').height(maxHeight);
         });
   });
   // FOR WINDOW DRAGGERS & THEME EDITOR RESPONSIVE BUTTONS
   window.addEventListener("resize", function() {
     $('article.blog').each(function(i) {
     var maxHeight = 0;
     maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
     console.log(maxHeight);
     $('article.blog ').height(maxHeight);
     });
   }, 200);
</script>

        <script>window.__webpack_public_path__ = "https://cdn11.bigcommerce.com/s-6jbwqzrjqe/stencil/c5ee5f40-70af-0139-f82d-369fe140043f/dist/";</script>
        <script src="https://cdn11.bigcommerce.com/s-6jbwqzrjqe/stencil/c5ee5f40-70af-0139-f82d-369fe140043f/dist/theme-bundle.main.js"></script>
        <script>
            window.stencilBootstrap("default", "{\"zoomSize\":\"1280x1280\",\"productSize\":\"600x600\",\"showAdminBar\":true,\"genericError\":\"Oops! Something went wrong.\",\"maintenanceModeSettings\":[],\"adminBarLanguage\":\"{\\\"locale\\\":\\\"fr\\\",\\\"locales\\\":{\\\"admin.maintenance_header\\\":\\\"en\\\",\\\"admin.maintenance_tooltip\\\":\\\"en\\\",\\\"admin.maintenance_showstore_link\\\":\\\"en\\\",\\\"admin.prelaunch_header\\\":\\\"en\\\",\\\"admin.page_builder_link\\\":\\\"en\\\"},\\\"translations\\\":{\\\"admin.maintenance_header\\\":\\\"Your store is down for maintenance.\\\",\\\"admin.maintenance_tooltip\\\":\\\"Only administrators can view the store at the moment. Visit your control panel settings page to disable maintenance mode.\\\",\\\"admin.maintenance_showstore_link\\\":\\\"Click here to see what your visitors will see.\\\",\\\"admin.prelaunch_header\\\":\\\"Your storefront is private. Share your site with preview code:\\\",\\\"admin.page_builder_link\\\":\\\"Design this page in Page Builder\\\"}}\",\"urls\":{\"account\":{\"add_address\":\"/account.php?action=add_shipping_address\",\"addresses\":\"/account.php?action=address_book\",\"details\":\"/account.php?action=account_details\",\"inbox\":\"/account.php?action=inbox\",\"index\":\"/account.php\",\"orders\":{\"all\":\"/account.php?action=order_status\",\"completed\":\"/account.php?action=view_orders\",\"save_new_return\":\"/account.php?action=save_new_return\"},\"recent_items\":\"/account.php?action=recent_items\",\"returns\":\"/account.php?action=view_returns\",\"send_message\":\"/account.php?action=send_message\",\"update_action\":\"/account.php?action=update_account\",\"wishlists\":{\"add\":\"/wishlist.php?action=addwishlist\",\"all\":\"/wishlist.php\",\"delete\":\"/wishlist.php?action=deletewishlist\",\"edit\":\"/wishlist.php?action=editwishlist\"}},\"auth\":{\"check_login\":\"/login.php?action=check_login\",\"create_account\":\"/login.php?action=create_account\",\"forgot_password\":\"/login.php?action=reset_password\",\"login\":\"/login.php\",\"logout\":\"/login.php?action=logout\",\"save_new_account\":\"/login.php?action=save_new_account\",\"save_new_password\":\"/login.php?action=save_new_password\",\"send_password_email\":\"/login.php?action=send_password_email\"},\"brands\":\"https://vault-natural-demo.mybigcommerce.com/brands/\",\"cart\":\"/cart.php\",\"checkout\":{\"multiple_address\":\"/checkout.php?action=multiple\",\"single_address\":\"/checkout\"},\"compare\":\"/compare\",\"contact_us_submit\":\"/pages.php?action=sendContactForm\",\"gift_certificate\":{\"balance\":\"/giftcertificates.php?action=balance\",\"purchase\":\"/giftcertificates.php\",\"redeem\":\"/giftcertificates.php?action=redeem\"},\"home\":\"https://vault-natural-demo.mybigcommerce.com/\",\"product\":{\"post_review\":\"/postreview.php\"},\"rss\":{\"products\":[]},\"search\":\"/search.php\",\"sitemap\":\"/sitemap.php\",\"subscribe\":{\"action\":\"/subscribe.php\"}},\"secureBaseUrl\":\"https://vault-natural-demo.mybigcommerce.com\",\"cartId\":null,\"channelId\":1,\"template\":\"pages/home\",\"validationDictionaryJSON\":\"{\\\"locale\\\":\\\"fr\\\",\\\"locales\\\":{\\\"validation_messages.valid_email\\\":\\\"en\\\",\\\"validation_messages.password\\\":\\\"en\\\",\\\"validation_messages.password_match\\\":\\\"en\\\",\\\"validation_messages.invalid_password\\\":\\\"en\\\",\\\"validation_messages.field_not_blank\\\":\\\"en\\\",\\\"validation_messages.certificate_amount\\\":\\\"en\\\",\\\"validation_messages.certificate_amount_range\\\":\\\"en\\\",\\\"validation_messages.price_min_evaluation\\\":\\\"en\\\",\\\"validation_messages.price_max_evaluation\\\":\\\"en\\\",\\\"validation_messages.price_min_not_entered\\\":\\\"en\\\",\\\"validation_messages.price_max_not_entered\\\":\\\"en\\\",\\\"validation_messages.price_invalid_value\\\":\\\"en\\\"},\\\"translations\\\":{\\\"validation_messages.valid_email\\\":\\\"You must enter a valid email.\\\",\\\"validation_messages.password\\\":\\\"You must enter a password.\\\",\\\"validation_messages.password_match\\\":\\\"Your passwords do not match.\\\",\\\"validation_messages.invalid_password\\\":\\\"Passwords must be at least 7 characters and contain both alphabetic and numeric characters.\\\",\\\"validation_messages.field_not_blank\\\":\\\" field cannot be blank.\\\",\\\"validation_messages.certificate_amount\\\":\\\"You must enter a gift certificate amount.\\\",\\\"validation_messages.certificate_amount_range\\\":\\\"You must enter a certificate amount between [MIN] and [MAX]\\\",\\\"validation_messages.price_min_evaluation\\\":\\\"Min. price must be less than max. price.\\\",\\\"validation_messages.price_max_evaluation\\\":\\\"Min. price must be less than max. price.\\\",\\\"validation_messages.price_min_not_entered\\\":\\\"Min. price is required.\\\",\\\"validation_messages.price_max_not_entered\\\":\\\"Max. price is required.\\\",\\\"validation_messages.price_invalid_value\\\":\\\"Input must be greater than 0.\\\"}}\",\"validationFallbackDictionaryJSON\":\"{\\\"locale\\\":\\\"fr\\\",\\\"locales\\\":{\\\"validation_fallback_messages.valid_email\\\":\\\"en\\\",\\\"validation_fallback_messages.password\\\":\\\"en\\\",\\\"validation_fallback_messages.password_match\\\":\\\"en\\\",\\\"validation_fallback_messages.invalid_password\\\":\\\"en\\\",\\\"validation_fallback_messages.field_not_blank\\\":\\\"en\\\",\\\"validation_fallback_messages.certificate_amount\\\":\\\"en\\\",\\\"validation_fallback_messages.certificate_amount_range\\\":\\\"en\\\",\\\"validation_fallback_messages.price_min_evaluation\\\":\\\"en\\\",\\\"validation_fallback_messages.price_max_evaluation\\\":\\\"en\\\",\\\"validation_fallback_messages.price_min_not_entered\\\":\\\"en\\\",\\\"validation_fallback_messages.price_max_not_entered\\\":\\\"en\\\",\\\"validation_fallback_messages.price_invalid_value\\\":\\\"en\\\"},\\\"translations\\\":{\\\"validation_fallback_messages.valid_email\\\":\\\"You must enter a valid email.\\\",\\\"validation_fallback_messages.password\\\":\\\"You must enter a password.\\\",\\\"validation_fallback_messages.password_match\\\":\\\"Your passwords do not match.\\\",\\\"validation_fallback_messages.invalid_password\\\":\\\"Passwords must be at least 7 characters and contain both alphabetic and numeric characters.\\\",\\\"validation_fallback_messages.field_not_blank\\\":\\\" field cannot be blank.\\\",\\\"validation_fallback_messages.certificate_amount\\\":\\\"You must enter a gift certificate amount.\\\",\\\"validation_fallback_messages.certificate_amount_range\\\":\\\"You must enter a certificate amount between [MIN] and [MAX]\\\",\\\"validation_fallback_messages.price_min_evaluation\\\":\\\"Min. price must be less than max. price.\\\",\\\"validation_fallback_messages.price_max_evaluation\\\":\\\"Min. price must be less than max. price.\\\",\\\"validation_fallback_messages.price_min_not_entered\\\":\\\"Min. price is required.\\\",\\\"validation_fallback_messages.price_max_not_entered\\\":\\\"Max. price is required.\\\",\\\"validation_fallback_messages.price_invalid_value\\\":\\\"Input must be greater than 0.\\\"}}\",\"validationDefaultDictionaryJSON\":\"{\\\"locale\\\":\\\"fr\\\",\\\"locales\\\":{},\\\"translations\\\":{}}\"}").load();
        </script>

        <script type="text/javascript" src="https://cdn11.bigcommerce.com/shared/js/datatags-a6c27a4dafebddd5845000c8abc99b2096434171.js" defer></script>
<script type="text/javascript">
window.addEventListener('DOMContentLoaded', function () { window.initDataTags([], [], window.analytics, {"channel":{"id":0,"name":"default","type":"default"}}); })
</script>
<script type="text/javascript" src="https://cdn11.bigcommerce.com/shared/js/csrf-protection-header-b572e5526f6854c73a5e080ef15a771f963740ae.js"></script>

        <!-- snippet location footer -->
    </body>
</html>

