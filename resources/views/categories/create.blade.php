@extends('dashboard.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="chmn">
      <ol class="breadcrumb">
        <li><a href="{{url('/dashboardA')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{ url('/categories') }}"> categories</a></li>
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
		<div class="container">
		
		    <form action="{{url('/categories')}}" method="POST" enctype="multipart/form-data">
			
			          {{ csrf_field() }}
					  
					  
					  <div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" name="title_categorie" placeholder="Name...">
					  </div>


                            <div class="form-group">
                            <label>Picture</label>
                            <input type="file" class="form-control" name="image_categorie" >
                            </div>


                              <div class="form-group">
                              <label>menu</label>
                              <select name="id_menu">
                                @foreach($listMenu  as $menu)
                                <option value="{{$menu->id}}">{{$menu->name}}</option>
                                @endforeach
                              </select>
                              </div>
					 
					  <button  class="btn btn-default">Create</button>
            </form>
		
		
	</div>	
		
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