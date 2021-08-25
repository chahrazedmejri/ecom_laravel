@include('session_admin.header')
@include('session_admin.nav')

  <div class="main-panel">



<div class="content">



<div class="container-fluid">
          <div class="row">
            <div class="col-md-12 ml-auto mr-auto">


              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Voulez-vous ajouter un nouveau livreur?</h4>
                  <p class="card-category">Marekti bio</p>
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
                  <div class="table-responsive table-upgrade">
                    <table class="table ">
                      <thead  class="text-center">
                        <tr>
                          
                        </tr>
                      </thead>
                      <tbody class="text-center">
                        <tr>
                          <td>Livreurs</td>

                          <?php        
                          $count = DB::table('livreurs')->count();
                     
                          ?>
                          <td class="text-center"> Total : <?php   print_r($count); ?>                        </tr>
                       
                        <tr>
                          <td class="text-center"></td>
                          <td class="text-center">
                          </td>
                          <td class="text-center">
                            <a  style="background-color:#4a997d;" target="_blank" href="{{ route('livreurs.create') }}" class="btn btn-round btn-fill ">Ajouter un livreur</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
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
                  <h4 class="card-title ">Liste des livreurs </h4>
                  <p class="card-category"> MAREKTI BIO</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table  class="table">
                      <thead class="text-center text-primary">
                      <th></th>
                      <th>ID</th>
            <th>Nom</th>
            <th>E-mail</th>
           <th>Trajet</th>
           <th>Numéro de téléphone</th>
           <th>Cin</th>
         
           <th></th>

                      </thead>

                      <tbody  class="text-center">
                                                            
@foreach ($livreurs as $livreurs)

<tr> 

<td><img src="images/admin_img/{{$livreurs->image_path}}" width="50" height="60"></td>	
<td>{{$livreurs->id}}</td>
<td>{{$livreurs->name}}</td>
<td>{{$livreurs->email}}</td>
<td>{{$livreurs->region}}</td>
<td>{{$livreurs->tel}}</td>
<td>{{$livreurs->cin}}</td>

<td>
            <form action="{{ route('livreurs.destroy',$livreurs->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('livreurs.edit', $livreurs->id) }}"><span class="material-icons">
edit
</span></a>
<form action="{{ route('livreurs.destroy', $livreurs->id)}}" method="post">
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
            </div>
 










      @include('session_admin.footer')