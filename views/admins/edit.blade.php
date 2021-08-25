@include('session_admin.header')
@include('session_admin.nav')

  <div class="main-panel">

  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"><center>MODIFIER MON PROFIL</center></h4>
                  <p  class="card-category"><center><a href="/profil" style="color:#e6ccff;" >{{Auth::guard('admin')->user()->name}} </a></center></p>

                </div>
                <div class="card-body">
                <form action="{{ route('admin.update',Auth::guard('admin')->user()->id)  }}" method="POST" >
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
                          <label class="bmd-label-floating"> id = {{Auth::guard('admin')->user()->id}} (disabled) </label>
                          <input placeholder="" type="text" class="form-control" disabled>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nom</label>
                          <input name="name" value="{{Auth::guard('admin')->user()->name}}" type="text" class="form-control">
                          <span class="text-danger">{{ $errors->first('name') }}</span>

                       </div>
                      </div>
                     
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">image path</label>
                          <input name="image_path" value="{{Auth::guard('admin')->user()->image_path}}" type="text" class="form-control">
                          <span class="text-danger">{{ $errors->first('image_path') }}</span>

                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">E-mail</label>
                          <input name="email" value="{{Auth::guard('admin')->user()->email}}" type="email" class="form-control">
                          <span class="text-danger">{{ $errors->first('email') }}</span>

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
                  <img src="images/admin/{{Auth::guard('admin')->user()->image_path}}" width="50" height="60">      
                            
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Admin Marekti Bio</h6>
                  <h4 class="card-title">{{Auth::guard('admin')->user()->name}}</h4>
                  <p class="card-description">
                  {{Auth::guard('admin')->user()->email}}
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

                <form method="POST" data-create-account-form class="form" action="{{ route('changePasswordad')}}">
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







      
  @include('session_admin.footer')