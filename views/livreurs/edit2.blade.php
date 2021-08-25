@include('sess_livreurs.header')
@include('sess_livreurs.nav')

  <div class="main-panel">

  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
          
                <div class="card-header card-header-primary">
                <h4 class="card-title"><center>MODIFIER MON PROFIL</center></h4>
                  <p  class="card-category"><center><a href="/profil" style="color:#e6ccff;" >{{Auth::guard('livreur')->user()->name}} </a></center></p>
                  
          
                </div>
                
                <div class="card-body">
                <form action="{{ route('livreurs.update',[Auth::guard('livreur')->user()->id]) }}" method="POST" >
{{ csrf_field() }}
@method('PATCH')                    


    @if (session('success2'))
    <div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <i class="material-icons">close</i>
</button>
<span>                          
{{ session('success2') }}
                       </span>
    </div>                                
    @endif

<div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating"> id = {{Auth::guard('livreur')->user()->id}} (disabled) </label>
                          <input  value="{{Auth::guard('livreur')->user()->id}}" placeholder="" type="text" class="form-control" disabled>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nom</label>
                          <input name="name" value="{{Auth::guard('livreur')->user()->name}}" type="text" class="form-control">
                          <span class="text-danger">{{ $errors->first('name') }}</span>

                       </div>
                      </div>
                     
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">image path</label>
                          <input name="image_path" value="{{Auth::guard('livreur')->user()->image_path}}" type="text" class="form-control">
                          <span class="text-danger">{{ $errors->first('image_path') }}</span>

                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">E-mail</label>
                          <input name="email" value="{{Auth::guard('livreur')->user()->email}}" type="email" class="form-control">
                          <span class="text-danger">{{ $errors->first('email') }}</span>

                        </div>
                      </div>
                     
                    </div>
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tèlephone</label>
                          <input name="tel" value="{{Auth::guard('livreur')->user()->tel}}" type="text" class="form-control">
                          <span class="text-danger">{{ $errors->first('tel') }}</span>

                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Numèro Cin </label>
                          <input name="cin" value="{{Auth::guard('livreur')->user()->cin}}" type="text" class="form-control">
                          <span class="text-danger"></span>

                        </div>
                      </div>
                     
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adresse</label>
                          <input name="addresse" value="{{Auth::guard('livreur')->user()->addresse}}" type="text" class="form-control">
                          <span class="text-danger">{{ $errors->first('addresse') }}</span>

                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Trajet</label>
                          <input name="region" value="{{Auth::guard('livreur')->user()->region}}" type="text" class="form-control">
                          <span class="text-danger">{{ $errors->first('region') }}</span>

                        </div>
                      </div>
                     
                    </div>
                     
                    
                    <button type="submit" class="btn btn-primary pull-right">Modifier</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>



            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <img src="images/admin_img/{{Auth::guard('livreur')->user()->image_path}}" width="50" height="60">      
                            
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Livreur Marekti Bio</h6>
                  <h4 class="card-title">{{Auth::guard('livreur')->user()->name}}</h4>
                  <p class="card-description">{{Auth::guard('livreur')->user()->email}}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>




        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                <h4 class="card-title"><center>CHANGER  MOT DE PASSE</center></h4>
                <p  class="card-category"><center><a href="login/admin" style="color:#e6ccff;" >MAREKTI BIO</a></center></p>
                  
            
                </div>
                <div class="card-body">

            
            
                <form method="POST" data-create-account-form class="form" action="{{ route('changePasswordliv') }}">
                        {{ csrf_field() }}           




                    @if (session('error'))

                    <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>                          
                      {{ session('error') }}                    
                        </span>
                        </div>
                    @endif

                        @if (session('success'))
                        <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>                          
                    {{ session('success') }}
                                           </span>
                        </div>                                
                        @endif

                
                            <div class="row">
                      <div class="col-md-8">
                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">

                          <label class="bmd-label-floating">votre ancien mot de passe</label>
                          <input id="current-password" type="password" class="form-control" name="current-password" >
                          @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>
                     
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                      <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                          <label class="bmd-label-floating">Nouveau Mot de passe</label>
                          <input name="new-password" id="new-password" type="password" class="form-control">
                          @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>
                     
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Confirmer votre Nouveau mot de passe</label>
                          <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>

                        </div>
                      </div>
                     
                    </div>
                    
                     
                    
                    <button type="submit" class="btn btn-primary pull-right">Changer</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>







      
  @include('sess_livreurs.footer')