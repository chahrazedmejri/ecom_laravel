@include('session_admin.header')
  @include('session_admin.nav')

    <div class="main-panel">

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
    
                    <i class="material-icons">people_outline</i>
                  </div>
                  <p class="card-category">Marekti bio </p><br>
                  <?php        
                          $count = DB::table('users')->count();
                     
                          ?> 
                  <h3 class="card-title"><?php   print_r($count); ?><br>
                    <small > <a href="/users" style="color:#d6478f; text-transform: uppercase;">Clients</a></small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
     
                    <i class="material-icons text-danger">settings_accessibility</i>
                    <a href="/users">Gérer clients...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment_ind</i>
                  </div>
                  <p class="card-category">Marekti bio</p><br>

               
             <h3 class="card-title"><?php   print_r( DB::table('livreurs')->count()); ?><br>
                  <small ><a href="/livreurs" style="color:#d6478f; text-transform: uppercase;" >Livreurs</a></small>
</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">person_add</i><a href="/livreurs" >Gérer livreurs...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">shopping_bag</i>
                  </div>
                  <p class="card-category">Marekti bio</p><br>
                
             <h3 class="card-title"><?php   print_r(DB::table('produits')->count()); ?><br>
                  <small> <a href="/produits" style="color:#d6478f; text-transform: uppercase;">Produits</a></small>
</h3>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">shopping_bag</i> <a href="/produits">Gérer produits...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">shopping_cart</i>
                  </div>
                  <p class="card-category">Marekti bio</p><br>
                 
             <h3 class="card-title">
             <?php print_r( DB::table('orderlivrer')->count() ); 
                     ?> <br>
                  <small style="color:#d6478f; text-transform: uppercase;">Commandes livrèes </small>                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">shopping_basket</i> <a href="listecommande">Gérer commandes...</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">tâches d'aujourd'hui:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                          les commandes en attente
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                             la disponibilité des livreurs
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                     
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <tbody>
                        <?php  $order= DB::select('select * from orders',[1] );
                         $orderprs= DB::select('select * from orderproducts',[1] );
                        ?>
                        @foreach ($order as $orders)

                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" >
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                           
                            <td>@if($orders->quant==1)
                            {{$orders->quant}} PRODUIT :
                              @else
                              {{$orders->quant}} PRODUITS :
                              @endif  
                                 @foreach ($orderprs as $orderpr)
@if($orderpr->orderid==$orders->id)
 {{$orderpr->name}},
 @endif
 @endforeach
   Total : {{$orders->total}} DT</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Affecter la commande" class="btn btn-primary btn-link btn-sm">
                             <a href="/listecommande">   <i class="material-icons">edit</i></a>
                              </button>
                             
                            </td>
                          </tr>


                         @endforeach
                      
                         
                          
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="messages">
                      <table class="table">
                        <tbody>
                        <?php   $ordera= DB::select("select Distinct(livreur) ,count(1) as CountOrder from ordersaffecter 
        where etat='En-cours'
        Group by livreur
        Order BY CountOrder Desc 
         ");
           $livrss= DB::select("select * from livreurs ",[1]);?>

          
          @foreach($ordera as $ordersaffecters)
                      <tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>
                              {{$ordersaffecters->livreur}} : 
                              
                            @foreach($livrss as $liv)

@if($liv->name==$ordersaffecters->livreur)  
                            
{{$liv->region}}
@endif
@endforeach
, La commande contient @if($ordersaffecters->CountOrder==1) {{$ordersaffecters->CountOrder}} Produit
@else 
{{$ordersaffecters->CountOrder}} Produits
@endif
                            </td>



                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Modifier" class="btn btn-primary btn-link btn-sm">
                              <a href="/listecommande">     <i class="material-icons">edit</i> </a>
                              </button>
                              <button type="button" rel="tooltip" title="Supprimer l'affectation" class="btn btn-danger btn-link btn-sm">
                               <a href="/listecommande"> <i class="material-icons">close</i></a>
                              </button>
                            </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title"><center>Les livreurs de<a href="/"> Marekti </a></center></h4>
                  <p class="card-category"><a href="/livreurs">Cliquez pour ajouter un nouveau livreur</a></p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-success">
                      <th>#ID</th>
                      <th>Nom</th>
                      <th>règion</th>
                      <th>tel</th>

                    </thead>
                    <tbody>
                    <?php
                          $liv= DB::select('select * from livreurs',[1] );
          ?>
                                @foreach($liv as $livs)  

                      <tr>

                        <td>{{$livs->id}}</td>
                        <td>{{$livs->name}}</td>
                        <td>{{$livs->region}}</td>
                        <td>{{$livs->tel}}</td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('session_admin.footer')