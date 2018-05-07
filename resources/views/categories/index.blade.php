@extends('dashboard.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="chmn">
      <ol class="breadcrumb">
        <li><a href="{{url('/dashboardA')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{ url('/categories') }}"> Categories</a></li>
      </ol>
      </div>
    </section>

      <section class="content">

      <!-- Default box -->
      <div class="box">
  <div class="warper container-fluid">
          
            <div class="page-header"></h1></div>
            

<div class="container">
    <div class="row">
        <div class="col-md-12">

    <!-- table -->
    
    <a href="{{url('/categories/create')}}" class="btn btn-primary">create</a>
     @if(count($listCategorie) != 0 ) 
    <table class="table table-striped" >
          <thead>
            <tr>
              <th>image</th>
            <th>categorie</th>
            <th></th>
            </tr>
          </thead>
            
          <tbody>
          @foreach($listCategorie as $categorie)
              <tr>
                <td><img alt='' src="{{asset('storage/'.$categorie->image_categorie)}}" width="50" height="50" /></td>
              <td>{{$categorie->title_categorie}}</td>
              <td>
                <form action="{{url('/categories/'.$categorie->id)}}" method="post">
                    {{ csrf_field() }}
            
                    {{ method_field('DELETE') }}
              <button class="btn btn-danger" onclick="return confirm('');"><i class="fa fa-trash"></i></button>
              <a href="{{url('/categories/'.$categorie->id.'/edite')}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
            </form>
              </td>
              </tr>
          @endforeach 
          </tbody>
                 
       </table>
     
              @else
                     <p>Mesage pas d'existance !</p>  
                @endif  
</div>
    
    <!-- fin table -->
    
        </div>
    </div>
</div>






   </div>
    </div>
    </div>
    </div>
   </div>
            
        </div>

   
@endsection