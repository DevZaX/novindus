@extends('dashboard.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="chmn">
      <ol class="breadcrumb">
        <li><a href="{{url('/dashboardA')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{ url('/ps') }}"> pages</a></li>
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
		
		    <form action="{{url('/ps/'.$p->id)}}" method="POST" enctype="multipart/form-data">
			
			          {{ csrf_field() }}
					     {{ method_field('PUT') }}
					  
					  <div class="form-group">
						<label>title</label>
						<input type="text" class="form-control" name="title" placeholder="title..." value="{{$p->title}}">
					  </div>


                          


                            

                              
                                 <div class="form-group">
                            <label>emplacement</label>
                          <select name="emplacement">
                            <option>contact</option>
                            <option>livraison</option>
                            <option>propos</option>
                             <option>clients</option>
                              <option>pratique</option>
                               <option>offres</option>
                          </select>
                            </div>

                           
 <div class="form-group">
  <label>content</label>
                            <textarea id="contenu"  class="form-control" name="content" cols="50" rows="5">
                              {{$p->content}}
                            </textarea>
                            <script>
                    CKEDITOR.replace( "contenu" );
                </script>
  
					 
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