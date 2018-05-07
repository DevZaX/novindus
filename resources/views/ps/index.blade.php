@extends('dashboard.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="chmn">
      <ol class="breadcrumb">
        <li><a href="{{url('/dashboardA')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{ url('/pubs') }}"> Articles</a></li>
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
    
    <a href="{{url('/ps/create')}}" class="btn btn-primary">create</a>
     @if(count($ps) != 0 ) 
    <table class="table table-striped" >
          <thead>
            <tr>
              <th>title</th>
              <th>emplacement</th>
              

            <th></th>
            </tr>
          </thead>
            
          <tbody>
          @foreach($ps as $p)
              <tr>
               
              <td>{{$p->title}}</td>
              <td>{{$p->emplacement}} </td>
             
          
              <td>
                <form action="{{url('/pubs/'.$p->id)}}" method="post">
                    {{ csrf_field() }}
            
                    {{ method_field('DELETE') }}
              <button class="btn btn-danger" onclick="return confirm('');"><i class="fa fa-trash"></i></button>
              <a href="{{url('/ps/'.$p->id.'/edite')}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
            </form>
              </td>
              </tr>
          @endforeach 
          </tbody>
                 
       </table>
     
              @else
                     <p>Message pas d'existance !</p>  
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