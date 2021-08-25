@include('session_admin.header')
@include('session_admin.nav')

  <div class="main-panel">

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                <br>
                  <h4 class="card-title "><center><b>Contact </b></center></h4>
                  <p  class="card-category"><center><a href="login/admin" style="color:#e6ccff;" >MAREKTI BIO</a></center></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-center text-primary">
                      <th>#ID</th>
                      <th>objet</th>
            <th>E-mail</th>
<th>Date</th>
<th><center>Message</center></th>

<div  class="alert alert-info"  style="background-color:#26734d;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> boîte messagerie : </b> Liste des messages envoyés à l'administrateur en Gmail"</span>
                  </div>

                      </thead>

                      <tbody class="text-center">
                                                            
@foreach ($ContactUS  as $ContactUS)

<tr  height=150> 
<td class="text-center text-primary">{{$ContactUS->id}}</td>
<td>{{$ContactUS->subject}}</td>
<td>{{$ContactUS->email}}</td>
<td>{{$ContactUS->created_at}}</td>

<td>
<form action="{{route('msgs',$ContactUS->id)}}"  >
                          <center><button type="submit" class="btn btn-primary btn-round">Message </button></center>
                          </form></td>


</tr>
@endforeach 
                      </tbody>
                    </table>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      @include('session_admin.footer')