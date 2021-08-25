@include('session_client.header')
<br>


<div data-content-region="header_below_nav--global"></div>
<div class="clear"></div>
        <div class="body" data-currency-code="USD">
     
    <div class="container">
        <div class="page">

    <main class="page-content" data-cart>
        <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="/" class="breadcrumb-label" itemprop="item"><span itemprop="name"> Acceuil </span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb is-active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <meta itemprop="item" content="">
                <span class="breadcrumb-label" itemprop="name"><a href="/panier" style="color:#d6478f;"> Mon Panier </a></span>
            <meta itemprop="position" content="2" />
        </li>
</ul>

        <br>
        <h1 class="page-heading" data-cart-page-title>
        <img src="{{asset('images/cart.png')}}" width="50">
Mon panier </h1>
<b > ( {{Cart::Count()}} 
@if (Cart::Count() < 2 ) Article
 @else Articles
 </b>
@endif) 
        



@if(Cart::count() > 0)

            <div data-cart-content>
                <table class="cart" data-cart-quantity="1">
    <thead class="cart-header">

        <tr>
            <th class="cart-header-item" colspan="2">Produit</th>
            <th class="cart-header-item">Prix</th>
            <th class="cart-header-item cart-header-quantity">Quantitè</th>
            <th class="cart-header-item">Total</th>
        </tr>
    </thead>



    <tbody class="cart-list">
    @foreach (Cart::content() as $produits)
            <tr class="cart-item" data-item-row>
         
            <td class="cart-item-block cart-item-figure">
                        <img src="images/produits/{{$produits->model->image_path}}" width="60"alt="produit marekti" title="produit marekti" data-sizes="auto"

class=" cart-item-image"/>



                <td class="cart-item-block cart-item-title">
                        <p class="cart-item-brand">{{$produits->model->marque}}</p>
                    <h2 class="cart-item-name">
                        <a class="cart-item-name__label" href="">{{$produits->model->nom}}</a>
                    </h2>
                </td>

                <td class="cart-item-block cart-item-info">
                    <span class="cart-item-label">Price</span>
                        <span class="cart-item-value ">{{number_format($produits->model->getprix(),3)}} DT</span>
                </td>
                <td class="cart-item-block cart-item-info" data-th="Quantity">
                <span class='number-wrapper'>

            <input  width="2" min="1" max="15" type="number" value="{{ $produits->qty }}" class="form-control quantity" class="quantity"/>
                </span>
            <button class="btn btn-info btn-sm update-cart" data-token="{{ csrf_token() }}" data-id="{{ $produits->rowId}}" >
            <i class="fa fa-refresh"></i>Recalcluer</button>
        </td>


        <td class="cart-item-block cart-item-info">
                    <span class="cart-item-label">Total</span>

                        <form action="{{route('cart.destroy',$produits->rowId)}}" method="post">
                        <strong class="cart-item-value ">
                        {{ number_format($produits->model->getprix() * $produits->qty ,3)  }}DT
                        </strong>

                        @csrf
                        @method('DELETE')
                        <button class="cart-remove icon"
                                data-cart-itemid="58c1ffca-9ee4-4e8c-9b0c-7ff8df6befff"
                                data-confirm-delete="Are you sure you want to delete this item?"
                                aria-label="cart.remove_item"
                                Type="submit"
                        >
                            <svg><use xlink:href="#icon-close"></use></svg>
                        </button>
                        </form>
                </td>


            </tr>
            @endforeach
    </tbody>
</table>
            </div>












            <div data-cart-totals>
            <a href="/videpanier" style="color:#d6478f;">>> vider mon panier</a>

                <ul class="cart-totals">

    <li class="cart-total">
        <div class="cart-total-label">
            <strong>Sous-total:</strong>
        </div>
        <div class="cart-total-value">
                <span> {{ number_format($produits->model->gettot(),3) }} DT</span>
        </div>
    </li>
    <li class="cart-total">
        <div class="cart-total-label">
            <strong>prix de livraison:</strong>
        </div>
        <div class="cart-total-value">
                <span>9000 DT</span>
        </div>
    </li>
    <li class="cart-total">
        <div class="cart-total-label">
            <strong>Total:</strong>
        </div>
        <div class="cart-total-value">
                <span> {{number_format($produits->model->gettotal(),3)}} DT</span>
        </div>
    </li>

</ul>
            </div>

                <div class="cart-actions">
                    <a class="button button--primary" href="/commande" title="Finaliser Ma Commande">Finaliser Ma Commande</a>
                </div>

    </main>
</div>

<br>

    
<div class="cart-actions">
                    <a class="button button--primary" href="/" title="Continuer  Mes  Achats<">Continuer  Mes  Achats</a>
                </div>
    </div>
    
    @else
<center>
<p> <strong style="color:#d6478f;">votre panier est vide </strong></p>
 <a href="/" style="color:#006600" >Cliquez ici </a>  pour continuer vos achats .</p>
</center>
</div>
    @endif

    <div id="alert-modal" class="modal modal--alert modal--small" data-reveal data-prevent-quick-search-close>
    <div class="swal2-icon swal2-error swal2-icon-show"><span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span></div>

    <div class="button-container"><button type="button" class="confirm button" data-reveal-close>OK</button></div>
</div>
</div>


</div>

@include('session_client.footer')


<script>
$(".update-cart").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
        url: "{{ url('update-cart') }}",
        method: "patch",
        data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity:
        ele.parents("tr").find(".quantity").val()},
        success: function (response) {
            window.location.reload(); 
        }
    });
 });
</script>