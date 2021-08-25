@include('session_admin.header')
  <div class="main-panel">



<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Modifier la Categorie</h4>
                  <p class="card-category"> marekti bio</p>
                </div>
                <div class="card-body">
                <form action="{{ route('categories.update',$categories->id) }}" method="POST" name="categories">
{{ csrf_field() }}
@method('PATCH')
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nom de la categorie</label>
                          <input value="{{ $categories->nom }}" name="nom" type="text" class="form-control" >
                          <span class="text-danger">{{ $errors->first('nom') }}</span>

                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sous categorie</label>
                          <input value="{{ $categories->sous_categ }}" name="sous_categ" type="text" class="form-control" >
                          <span class="text-danger">{{ $errors->first('sous_categ') }}</span>

                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Date Creation</label>

                          <input  value="{{ $categories->created_at }}" name="created_at" type="text" class="form-control">
                          <span class="text-danger">{{ $errors->first('created_at') }}</span>

                        </div>
                      </div>

 
                        
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Modifier </button>
                    <a href="{{ url('categories') }}" class="btn btn-primary pull-right">Annuler </a>

                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
    </div>
  </div>
  @include('session_admin.footer')