@extends('dashboard.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="chmn">
      <ol class="breadcrumb">
        <li><a href="{{url('/dashboardA')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{ url('/menus') }}"> Menus</a></li>
      </ol>
      </div>
    </section>

      <section class="content">

      <!-- Default box -->
      <div class="box">
  <div class="warper container-fluid" style="padding:50px;">
          
            <div class="page-header"></h1></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">

		<!-- formulaire -->
		
		
		    <form action="{{url('/menus/'.$menu->id)}}" method="POST">
			
			          {{ csrf_field() }}
					  
					  {{ method_field('PUT') }}
					   
					  <div class="form-group">
						<label for="exampleInputEmail1">menu</label>
						<input type="text" class="form-control" name="name"  value="{{ $menu->name}}">
					  </div>
					 
					  <button  class="btn btn-default">Update</button>
            </form>
		
		
		
		
		<!-- fin formulaire -->
		
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