@include('session_admin.header')
@include('session_admin.nav')

  <div class="main-panel">

  <div class="content">



        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Changer mot de passe</h4>
                  <p class="card-category">Marekti bio</p>
                  
                <div style="color:#ff9999;" class="panel-body">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        </div>
                </div>
                <div class="card-body">

                <form method="POST" data-create-account-form class="form" action="{{ route('changePass') }}">
                        {{ csrf_field() }}                
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