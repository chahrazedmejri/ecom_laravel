@include('session_admin.header')
  <div class="main-panel">



<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"><center>créer un livreur</center></h4>
                  <p  class="card-category"><center><a href="login/admin" style="color:#e6ccff;" >MAREKTI BIO</a></center></p>
                </div>
                @if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
                <div class="card-body">
                <form action='{{ url("register/livreur") }}' method="POST" name="update_livreurs">
                @csrf

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nom</label>
                          <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" >
                          @error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Addresse E-mail</label>

                          <input  name="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                          @error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">

                          <input placeholder="Mot de passe" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                          @error('password')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror




                        </div>

                        <div class="form-group">
                          <label class="bmd-label-floating">Cin</label>

                          <input type="text" name="cin" class="form-control @error('cin') is-invalid @enderror" name="cin" value="{{ old('cin') }}" required >
                          @error('cin')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror                                 </div>
                        

                        
                      </div>



                      <div class="col-md-6">
                      <div class="form-group">

                          <input placeholder="confirmer Mot de passe" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                 



                        </div>
                        
</div>






                    </div>



                    <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">

                        <label class="bmd-label-floating">numéro de tel</label>
                          
                          <input type="text" name="tel"class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}"  >
                          @error('tel')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror                                               </div>
                                                </div>


<div class="col-md-6">
                        <div class="form-group">
                       
                        <label class="bmd-label-floating">Trajet </label>
                          
                          <input type="text" name="region" class="form-control @error('region') is-invalid @enderror" name="region"  >
                          @error('region')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror                                                             </div>
                                                </div>



                    </div>



                    <div class="form-group">
                       
                       <label class="bmd-label-floating">Adresse </label>
                         
                         <input type="text" name="addresse"  class="form-control @error('addresse') is-invalid @enderror" name="addresse" value="{{ old('addresse') }}" required autocomplete="addresse" >
                         @error('addresse')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror                                                             </div>
                                               </div>


                    <div class="col-md-12">
                        <div class="form-group">
                        <label class="bmd-label-floating">Image path </label>

      <div class="button-wrap">
        <label class="button" for="upload">   chercher photo</label>
        <input  placeholder="image_path "  id="upload" type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path" value="{{ old('image_path') }}" required autocomplete="image_path" autofocus>

      </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary pull-right">Confirmer </button>
                        <a href="{{ url('livreurs') }}" class="btn btn-primary pull-right">Annuler </a>

<br>
                      </div>

</div>

                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
    </div>
  </div>
 
  @include('session_admin.footer')