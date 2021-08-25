@include('session_client.header')

<br>
<div data-content-region="header_below_nav--global"></div>
<div class="clear"></div>
        <div class="body" data-currency-code="USD">
     
    <div class="container">
        
<main class="page blog">
  <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="/" class="breadcrumb-label" itemprop="item"><span itemprop="name">Acceuil</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb is-active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <meta itemprop="item" content="">
                <span class="breadcrumb-label" itemprop="name">Blog</span>
            <meta itemprop="position" content="2" />
        </li>
</ul>




    <h1 class="page-heading">Notre Blog</h1>
    <div class="blog-container">
 
    @foreach ($blogs as $blogs)

    <article class="blog">
    <div class="blog-post-figure">
          <figure class="blog-thumbnail blog-image uploaded">
              <a href="{{route('blogs.suite',$blogs->id)}}">
                  <img class="lazyload" data-sizes="auto" src="images/slider/{{$blogs->images}}" title="{{$blogs->titre}}">
              </a>
          </figure>
    </div>

    <div class="blog-post-body">
        <header class="blog-header">
            <h2 class="blog-title">
                <a href="" data-maxlength="24">{{$blogs->titre}}
                </a>
            </h2>
            <p class="blog-date" data-maxlength="55">Publié le {{$blogs->date}}</p>
        </header>

        <div class="blog-post">
        {{$blogs->description}} <a class="read-more" class="nav-link" href="{{route('blogs.suite',$blogs->id)}}" data-toggle="tab">Lire la suite</a>

</div>

        
</article>


@endforeach
</div>
    <div class="clear"></div>

    <div class="pagination">
    <ul class="pagination-list">

    </ul>
</div>
</main>


    </div>
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
        <div data-content-region="footer_above_full_width--global"></div>


@include('session_client.footer')
