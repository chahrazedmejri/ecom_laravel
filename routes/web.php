<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;
Auth::routes();

  /* newsletter Routes */

Route::get('newsletter','NewsletterController@index');
Route::post('newsletter/store','NewsletterController@store');

Route::get('delete/{id}', [App\Http\Livewire\ProductRatings::class,'delete'])->name('delete_rate');


  /* search Routes */

  Route::get('/search', 'search@search')->name('search');
  Route::get('/searchadmin', 'search@searchadmin')->name('searchadmin');
  Route::get('/search2', 'search@search2')->name('search2');
  Route::get('/searchliv', 'search@searchliv')->name('searchliv');


  /* panier Routes */

Route::get('/panier', [App\Http\Controllers\CartController::class,'index'])->name('cart.index');
Route::delete('/panier/{rowId}', [App\Http\Controllers\CartController::class,'destroy'])->name('cart.destroy');
Route::patch('update-cart', [App\Http\Controllers\CartController::class,'updateCart'])->name('updateCart');
Route::get('/panier/ajouter', [App\Http\Controllers\CartController::class,'store'])->name('cart.store');
Route::post('/panier/ajouter', [App\Http\Controllers\CartController::class,'store'])->name('cart.store');
Route::get('/videpanier',function()
{
    Cart::destroy();

    return back();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//routes affectation

Route::get('/affectation', [App\Http\Controllers\ordersaffecter::class,'affect']);
Route::get('/commandelivrè', [App\Http\Controllers\ordersaffecter::class,'cmnd_liv']);
Route::get('/commandelivrè/comande{id}', [App\Http\Controllers\ordersaffecter::class,'cmnd_liv_cmnd'])->name('cmnd_liv_cmnd');
Route::get('/affectation/livr_cmnd/{id}', [App\Http\Controllers\ordersaffecter::class,'livr_cmnd'])->name('livr_cmnd');
Route::get('/affectations/{id}', [App\Http\Controllers\ordersaffecter::class,'show'])->name('orders_user_livr.show');
Route::get('/affectation/produits/{id}', [App\Http\Controllers\ordersaffecter::class,'panier'])->name('orders_panier_livr');
Route::delete('deleteaffect/{id}',[App\Http\Controllers\ordersaffecter::class,'destory'])->name('ordersaffect.destroy');

//Routes commandes
Route::get('/listecommande', [App\Http\Controllers\ordercontroller::class,'index']);
Route::get('/listecommandelivrè', [App\Http\Controllers\ordersaffecter::class,'index']);

Route::get('/listecommande/affectcmd/{id}', [App\Http\Controllers\ordercontroller::class,'showaffectlist'])->name('showaffectlist');
Route::post('/commande/affecter/{id}',[App\Http\Controllers\ordercontroller::class, 'affectcmnd'])->name('storecmnd.affect');


Route::get('/listecommande/cmmd/{id}', [App\Http\Controllers\ordercontroller::class,'show'])->name('orders_user.show');
Route::get('/listecommande_livrè/cmdliv/{id}', [App\Http\Controllers\ordercontroller::class,'show2'])->name('orders_user.show2');
Route::get('/listecommande_livrè/cmdlivr/{id}', [App\Http\Controllers\ordercontroller::class,'panier2'])->name('orders_panier2');
Route::get('/listecommande/{id}', [App\Http\Controllers\ordercontroller::class,'panier'])->name('orders_panier');

Route::post('/commande/envoyer',[App\Http\Controllers\ordercontroller::class, 'store'])->name('cmnd.store');
Route::get('/commande/{id}',[App\Http\Controllers\ordercontroller::class, 'edit'])->name('orders_edit');

Route::patch('/commande/update{id}',[App\Http\Controllers\ordercontroller::class,'update'])->name('cmnd_update');

Route::get('/commande', function () {

    if(Auth::check()) 
    {
        return view ('session_client.commande');


    }else
    {
        return  redirect('/login')
        ->with('success','Vous devez vous connecter pour terminer votre commande! ');
        $cart = Cart::content();

    }


});
Route::get('/cmd/{id}', [App\Http\Controllers\ordercontroller::class,'cmndrec'])->name('cmndrec');




Auth::routes(['verify' => true]);
  
Route::get('/home', 'HomeController@index')->name('home');

/* contact Routes */

Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactSaveData']);

Route::get('contact-us/{id}', [App\Http\Controllers\ContactUSController::class,'show'])->name('msgs');

Route::get('/contact', function () {
    return view('sess_livreurs.contact');

});

Auth::routes();
/* password Routes */


Route::get('/changePassword',[App\Http\Controllers\HomeController::class, 'showChangePassword']);
Route::post('/changePassword',[App\Http\Controllers\HomeController::class,'changePassword'])->name('changePassword');


Route::get('/changePasswordliv',[App\Http\Controllers\livreurController::class, 'showChangePasswordliv']);
Route::post('/changePasswordliv',[App\Http\Controllers\livreurController::class,'changePasswordliv'])->name('changePasswordliv');

Route::get('/changePasswordad',[App\Http\Controllers\NewsletterController::class, 'showChangePasswordad']);
Route::post('/changePasswordad',[App\Http\Controllers\NewsletterController::class,'changePasswordad'])->name('changePasswordad');

/* auth Routes */

Route::get('/login/admin', [App\Http\Controllers\adminController::class, 'showAdminLoginForm']);
Route::get('/login/livreur', [App\Http\Controllers\LoginController::class,'showlivreurLoginForm']);
Route::get('/register/admin', [App\Http\Controllers\registeradmin::class,'showAdminRegisterForm']);
Route::get('/register/livreur', [App\Http\Controllers\RegisterController::class,'showlivreurRegisterForm']);

Route::post('/login/admin', [App\Http\Controllers\adminController::class,'adminLogin']);
Route::post('/login/livreur', [App\Http\Controllers\LoginController::class,'livreurLogin']);
Route::post('/register/admin', [App\Http\Controllers\registeradmin::class,'createAdmin']);
Route::post('/register/livreur', [App\Http\Controllers\RegisterController::class,'createlivreur']);

Route::group(['middleware' => 'auth:livreur'], function () {
    
    Route::view('/livreur', 'livreur');
});

Route::group(['middleware' => 'auth:admin'], function () {
    Auth::routes();

    Route::view('/admindash', 'admin');
});


Route::get('/livreur', function () {
    return view('sess_livreurs.livreur');
});

Route::get('admin/logout', [App\Http\Controllers\adminController::class,'logout'])->name('admin-logout');

Route::get('livreur/logout', [App\Http\Controllers\LoginController::class,'logout'])->name('livreur-logout');
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class,'logout']);


Auth::routes();

Route::get('home/{id}', [App\Http\Controllers\usersController::class,'historique'])->name('users.historique');

/* crud Routes */

Route::resource('marques', marqueController::class);
Route::resource('categories', categorieController::class);
Route::resource('livreurs', livreurController::class);
Route::resource('ContactUS', ContactUSController::class);
Route::resource('admins', adminController::class);
Route::resource('users', usersController::class);
Route::resource('produits', produitsController::class);

Route::get('/prof', function () {
return view('livreurs.edit2');
});

/* profil admin Routes */


Route::get('/profil', function () {
    return view('admins.edit');

});


Route::patch('/profil/admin/{id}',[App\Http\Controllers\NewsletterController::class,'update'])->name('admin.update');

  /* Blog Routes */


Route::get('/blogsuite/{id}',[App\Http\Controllers\blogController::class,'show2'])->name('blogs.suite');


Route::resource('blogs', blogController::class);
Route::get('/show',[App\Http\Controllers\blogController::class,'show']);

Route::get('/showavis/{id}',[App\Http\Controllers\produitsController::class,'showavis'])->name('showavis');


/* produits Routes */

Route::get('/prodlist', function () {
    $p= DB::select('select * from produits ',[1] );
    return view('session_client.product-list', compact('p'));

});

Route::get('/xm', function () {
    $produits = DB::table('produits')->select('id','nom','marque','categorie','sous_categ','prix','prix_promo','quant','def','image_path','status')->get();
    return view('index', compact('produits'));
});
Route::get('/', function () {
    $produits = DB::select('select * from produits where  status=1 and prix_promo > 0 order by created_at desc ',[1] );
    $prod= DB::select('select * from produits where status=1 and prix_promo =0 order by created_at desc ',[1] );
    $p= DB::select('select * from produits  where status=1  order by created_at asc ',[1] );

     return view('index', compact('produits','prod','p'));
    
     return view('session_client.header', compact('produits','prod'));


     
    });

Route::get('/{id}', [App\Http\Controllers\produitsController::class,'show'])->name('produits.show');


Route::post('userUpdate', 'HomeController@userUpdate');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


