@include('session_admin.header')
  @include('session_admin.nav')

  <div class="main-panel">


  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"  style="text-transform: uppercase;"><center>Vous voulez créer un nouveau  Blog?</center></h4>
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
                        <td class="text-center">
                            <a style="background-color:#339966;"  target="_blank" href="{{ route('blogs.create') }}" class="btn btn-round btn-fill ">Créer un blog</a>
                          </td>
                          <td></td>

                          <?php        
                          $count = DB::table('blogs')->count();
                     
                          ?>
                          <td class="text-center"> Nombre de Blogs : <b> <?php   print_r($count); ?> </b>              
                          </td>         </tr>
                       
  
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
                  <h4 class="card-title ">BLOGS </h4>
                  <p class="card-category"> <a href="login/admin" style="color:#e6ccff;" >MAREKTI BIO</a></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                    <thead class=" text-primary">
                    <th><center></center></th>
                    <th><center>Titre</center></th>
                    <th><center>Description</center></th>
                    <th><center>Date</center></th>

                    <th><center>contenu</center></th>
                    <th><center>Actions</center></th>

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
                                                            
        @foreach ($blogs as $blogs)
                                                            
            <tr> 
            <td><center><img src="images/slider/{{$blogs->images}}" width="100" height="60"></center></td>                                                     
                                 
            <td><center>{{$blogs->titre}}</center></td>                                                     
            <td><center>{{$blogs->description}}</center></td> 

            <td><center>{{$blogs->date}}</center></td>                                                     
                                            
            <td><center>{{$blogs->contenu}}</center></td>    
            <td><center>    <form action="{{ route('blogs.destroy',$blogs->id) }}" method="Post">
<a class="btn btn-primary"  href="{{ route('blogs.edit',$blogs->id) }}"><span class="material-icons">
edit
</span></a>
<form action="{{ route('blogs.destroy', $blogs->id)}}" method="post">
{{ csrf_field() }}
@method('DELETE')
<button class="btn btn-danger" type="submit"><span class="material-icons">
delete
</span></button>
</form>
</form>               
</center></td>                          
</tr>
@endforeach

</tbody>
                    </table>                  </div>
                </div>
              </div>
            </div>
 







</div>
      @include('session_admin.footer')