@include('session_admin.header')
  <div class="main-panel">



<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">créer une categorie</h4>
                  <p class="card-category"> de marekti bio</p>
                </div>
                @if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
                <div class="card-body">
                <form action="{{ route('categories.store') }}" method="POST" name="update_marques">
                @csrf

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">categorie</label>
                          <input name="nom" type="text" class="form-control" >
                          @error('nom')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">sous-categorie</label>
                          <input name="sous_categ" type="text" class="form-control" >
                          @error('sous_categ')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
                        </div>
                      </div>
</div>

                    <button type="submit" class="btn btn-primary pull-right">Confirmer </button>
                    <a href="{{ url('categories') }}" class="btn btn-primary pull-right">Annuler </a>

                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
    </div>
  </div>
  @include('session_admin.footer')