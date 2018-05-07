@extends('dashboard.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="chmn">
      <ol class="breadcrumb">
        <li><a href="{{url('/dashboardA')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{ url('/pubs') }}"> articles</a></li>
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
		
		    <form action="{{url('/pubs/'.$article->id)}}" method="POST" enctype="multipart/form-data">
			
			          {{ csrf_field() }}
					     {{ method_field('PUT') }}
					  
					  <div class="form-group">
						<label>title</label>
						<input type="text" class="form-control" name="title" placeholder="title..." value="{{$article->title}}">
					  </div>


                          


                            

                                 <div class="form-group">
                            <label>price</label>
                            <input type="text" class="form-control" name="new_price" value="{{$article->new_price}}" >
                            </div>

                               <div class="form-group">
                            <label>old price</label>
                            <input type="text" class="form-control" name="old_price"  value="{{$article->old_price}}">
                            </div>
 <div class="form-group">
  <label>description</label>
                            <textarea id="contenu"  class="form-control" name="description" cols="50" rows="5">
                              {{$article->description}}
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
					 
					  <button  class="btn btn-default">Update</button>
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