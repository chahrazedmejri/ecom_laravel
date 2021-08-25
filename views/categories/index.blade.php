  @include('session_admin.header')
  @include('session_admin.nav')

  <div class="main-panel">

  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
              <div class="card">
              <div class="card-header card-header-primary">
                  <h4 class="card-title"><center>Vous voulez ajouter une nouvelle categorie?</center></h4>
                  <p  class="card-category"><center><a href="login/admin" style="color:#e6ccff;" >MAREKTI BIO</a></center></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive table-upgrade">
                    <table class="table">
                      <thead>
                        <tr>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>categories</td>
                      
                          <?php        
                          $count = DB::table('categories')->count();
                     
                          ?>
                          <td class="text-center"> Total : <?php   print_r($count); ?>
                        </tr>
                       
                        <tr>
                          <td class="text-center"></td>
                          <td class="text-center">
                          </td>
                          <td class="text-center">
                            <a style="background-color:#339966;" target="_blank" href="{{ route('categories.create') }}" class="btn btn-round btn-fill ">Créer une categorie</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
 
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title "><center>Liste des Catégories</center> </h4>
                  <p  class="card-category"><center><a href="login/admin" style="color:#e6ccff;" >MAREKTI BIO</a></center></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      <th>#ID</th>
            <th>Nom Categorie</th>
            <th>Sous-Categorie</th>
            <th>Date Creation</th>
           <th></th>
           @if (session('success'))
    <div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <i class="material-icons">close</i>
</button>
<span>                          
{{ session('success') }}
                       </span>
    </div>     
    @elseif (session('delete'))
    <div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <i class="material-icons">close</i>
</button>
<span>                          
{{ session('delete') }}
                       </span>
    </div>                                 
    @endif
                      </thead>

                      <tbody>
                                                            
@foreach ($categories as $categories)

<tr> 

					
<td>{{$categories->id}}</td>
<td>{{$categories->nom}}</td>
<td>{{$categories->sous_categ}}</td>
<td>{{$categories->created_at}}</td>
<td>
            <form action="{{ route('categories.destroy',$categories->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('categories.edit',$categories->id) }}"><span class="material-icons">
edit
</span></a>
<form action="{{ route('categories.destroy', $categories->id)}}" method="post">
{{ csrf_field() }}
@method('DELETE')
<button class="btn btn-danger" type="submit"><span class="material-icons">
delete
</span></button>
</form>
</form>
</td>
</tr>
@endforeach 
                     
</tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
 








      @include('session_admin.footer')