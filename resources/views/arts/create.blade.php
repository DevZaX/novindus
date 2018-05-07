@extends('dashboard.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="chmn">
      <ol class="breadcrumb">
        <li><a href="{{url('/dashboardA')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{ url('/arts') }}"> articles</a></li>
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
		
		    <form action="{{url('/arts')}}" method="POST" enctype="multipart/form-data">
			
			          {{ csrf_field() }}
					  
					  
					  <div class="form-group">
						<label>title</label>
						<input type="text" class="form-control" name="title" placeholder="title...">
					  </div>


                            <div class="form-group">
                            <label>Picture</label>
                            <input type="file" class="form-control" name="picture" >
                            </div>


                              <div class="form-group">
                              <label>categorie</label>
                              <select name="titre_id" class="form-control">
                                @foreach($titres as $titre)
                                <option value="{{$titre->id}}">{{$titre->title}}</option>
                                @endforeach
                              </select>
                              </div>

                                 <div class="form-group">
                            <label>price</label>
                            <input type="text" class="form-control" name="new_price" >
                            </div>

                               <div class="form-group">
                            <label>old price</label>
                            <input type="text" class="form-control" name="old_price" >
                            </div>
 <div class="form-group">
  <label>description</label>
                            <textarea id="contenu"  class="form-control" name="description" cols="50" rows="5">
                            </textarea>
                            <script>
                    CKEDITOR.replace( "contenu" );
                </script>
                          </div>
 <div class="form-group">
  <label>disponible</label>
                            <select name="disponibilitie" class="form-control">
                              <option>yes
                              </option>
                              <option>no
                              </option>
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