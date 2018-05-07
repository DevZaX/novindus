@extends('dashboard.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="chmn">
      <ol class="breadcrumb">
        <li><a href="{{url('/dashboardA')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{ url('/arts') }}"> Articles</a></li>
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
    
    <a href="{{url('/arts/create')}}" class="btn btn-primary">create</a>
     @if(count($articles) != 0 ) 
    <table class="table table-striped" >
          <thead>
            <tr>
              <th>picture</th>
              <th>title</th>
              <th>price</th>
              <th>old price</th>
              <th>availability</th>
            <th>categorie</th>
            <th></th>
            </tr>
          </thead>
            
          <tbody>
          @foreach($articles as $article)
              <tr>
                <td><img alt='' src="{{asset('storage/'.$article->picture)}}" width="50" height="50" /></td>
              <td>{{$article->title}}</td>
              <td>{{$article->new_price}} €</td>
              <td>{{$article->old_price}} €</td>
              <td>
                @if($article->disponibilitie == 1)
                   yes
                @endif
                 @if($article->disponibilitie == 0)
                 no
                @endif
              </td>
              <td>{{$article->titre->title}}</td>
              <td>
                <form action="{{url('/arts/'.$article->id)}}" method="post">
                    {{ csrf_field() }}
            
                    {{ method_field('DELETE') }}
              <button class="btn btn-danger" onclick="return confirm('');"><i class="fa fa-trash"></i></button>
              <a href="{{url('/arts/'.$article->id.'/edite')}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
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