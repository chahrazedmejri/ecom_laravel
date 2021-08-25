@include('session_admin.header')
  <div class="main-panel">



<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"  style="text-transform: uppercase;"><center>créer votre blog</center></h4>
                  <p  class="card-category"><center><a href="login/admin" style="color:#e6ccff;" >MAREKTI BIO</a></center></p>
                </div>
                @if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
                <div class="card-body">
                <form action="{{ route('blogs.store') }}" method="POST" >
                @csrf

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Titre</label>
                          <input name="titre" type="text" class="form-control" >
                          @error('titre')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <input name="description" type="text" class="form-control" >
                          @error('description')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
                        </div>
                      </div>
</div>



<div class="row">

<div class="col-md-12">
                        <div class="form-group">
                       
                        <label class="bmd-label-floating">Choisissez une image    :</label>
                        <label class="button" for="upload" >cliquer ici</label>
           
                        <input id="upload" type="file"   name="images"  class="form-control" >


@error('images')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror              
                  </div>
<div class="col-md-12">
                        <div class="form-group">
                       

<input type="date" name="date" class="form-control" >
@error('date')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror              
                  </div>
                  </div>



                  <div class="col-md-12">
                        <div class="form-group">
                          <label>Contenu du blog</label>
                          <div class="form-group">
                           
<input type="text" name="contenu" class="form-control" >
@error('contenu')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror                                     </div>








                    <button type="submit" class="btn btn-primary pull-right">Confirmer </button>
                    <a href="{{ url('blogs') }}" class="btn btn-primary pull-right">Annuler </a>

                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
    </div>
  </div>
  @include('session_admin.footer')