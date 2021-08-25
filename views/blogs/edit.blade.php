@include('session_admin.header')
  <div class="main-panel">



<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"  style="text-transform: uppercase;"><center>Modifier votre blog</center></h4>
                  <p  class="card-category"><center><a href="login/admin" style="color:#e6ccff;" >MAREKTI BIO</a></center></p>
                </div>
              <div class="card-body">
              <form action="{{ route('blogs.update', $blogs->id) }}" method="POST" name="update_produits">
{{ csrf_field() }}
@method('PATCH')

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Titre</label>
                          <input value="{{$blogs->titre}}" name="titre" type="text" class="form-control" >
     
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <input value="{{$blogs->description}}" name="description" type="text" class="form-control" >
     
                        </div>
                      </div>
</div>



<div class="row">

<div class="col-md-12">
                        <div class="form-group">
                       
                        <label class="bmd-label-floating">Choisissez une image    :</label>
           
                        <input value="{{$blogs->images}}" id="upload" type="text"   name="images"  class="form-control" >


            
                  </div>
<div class="col-md-12">
                        <div class="form-group">
                       

<input value="{{$blogs->date}}" type="date" name="date" class="form-control" >
             
                  </div>
                  </div>



                  <div class="col-md-12">
                        <div class="form-group">
                          <label>Contenu du blog</label>
                          <div class="form-group">
                           
<input value="{{$blogs->contenu}}" type="text" name="contenu" class="form-control" >
                                    </div>








                    <button type="submit" class="btn btn-primary pull-right">Modifier </button>
                    <a href="{{ url('blogs') }}" class="btn btn-primary pull-right">Annuler </a>

                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
    </div>
  </div>
  @include('session_admin.footer')