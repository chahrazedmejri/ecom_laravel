@include('session_admin.header')

  <div class="main-panel">
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"><center>Modifier le profil du livreur</center></h4>
                  <p  class="card-category"><center><a href="login/admin" style="color:#e6ccff;" >MAREKTI BIO</a></center></p>
                </div>
                <div class="card-body">
                
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
                @if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
                <form action="{{ route('livreurs.update',[$livreurs->id]) }}" method="POST" name="update" >
                @csrf
@method('PUT')

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nom</label>
                          <input  value="{{ $livreurs->name }}" name="name" type="text" class="form-control" >
               </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Addresse E-mail</label>

                          <input value="{{ $livreurs->email }}"   name="email" type="text" class="form-control">


                        </div>
                      </div>



                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cin</label>

                          <input value="{{ $livreurs->cin }}"  type="text" name="cin" class="form-control" >
                      </div>
</div>



                    </div>



                    <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">

                        <label class="bmd-label-floating">numéro de tel</label>
                          
                          <input value="{{ $livreurs->tel }}"  type="text" name="tel" class="form-control" >
                                               </div>
                                                </div>


<div class="col-md-6">
                        <div class="form-group">
                       
                        <label class="bmd-label-floating">Trajet </label>
                          
                          <input value="{{ $livreurs->region }}"  type="text" name="region" class="form-control" >
                                                     </div>
                                                </div>



                    </div>

                    <div class="form-group">
                       
                       <label class="bmd-label-floating">Adresse </label>
                         
                         <input value="{{ $livreurs->addresse }}"  type="text" name="addresse" class="form-control" >
                                                    
                                               </div>


                    <div class="col-md-12">
                        <div class="form-group">
                          <label>Image path</label>
                          <div class="form-group">
                          <div class="button-wrap">
           
<input value="{{$livreurs->image_path}}"   type="text"  name="image_path" class="form-control" >
                                    </div>
                      </div>
                        

                        
      
      </div>
                      

                      
                      <input type="submit" value="modifier" class="btn btn-primary pull-right"  >
                      <a href="{{ url('livreurs') }}" class="btn btn-primary pull-right">Annuler </a>

                    
</div>


                    <div class="clearfix"></div>

                  </form>


                </div>
              </div>
            </div>
            
    </div>
  </div>
 
  @include('session_admin.footer')