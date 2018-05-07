@extends('dashboard.index')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="chmn">
      <ol class="breadcrumb">
        <li><a href="{{url('/dashboardA')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('/pages') }}">Pages</a></li>
      </ol>
      </div>
    </section>

      <section class="content">

      <!-- Default box -->
      <div class="box">


 <div class="warper container-fluid" >
    
      <div class="row">

            <div class="col-md-14 col-md-offset-0" >
              
               <div class="panel-body">
       </br>

       <div>


       <style type="text/css">
         th{color:white;}
       </style>
@if(count($listPage) != 0 )
       <center> <table  id="data" class="table table-bordered table table-hover" style="width:70%">
           <thead>
                <tr >
                       <th id="tdcolor" style="width:85%;background-color: RGB(40,96,144); !important  " ><center>title</center></th> 
                        <th id="tdcolor" style="width:15%;background-color: RGB(40,96,144); !important  " ><center>action</center></th> 
                      
               </tr>
             </thead>
     


<tbody>  
<?php $i = 0; ?>
@foreach($listPage as $page)
<?php $i++; ?>
       <tr>
       <!--Ref pages  title Description Price link of pages date de publication pages image Action-->
       <td><center>{{$page->title_page}}</center></td>
       
          <td> 
  			  <form action="{{url('/pages/'.$page->id)}}" method="POST">
			
			          {{ csrf_field() }}
					  
					  {{ method_field('DELETE') }}

					<ul class="list-group">    
              <button type="submit" onclick="return(confirm('Etes-vous sûr de vouloir supprimer?'));"  style="color:red;border:0;background:transparent;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> 
            <a  class="glyphicon glyphicon-pencil" data-toggle="modal" data-target="#exampleModal<?php echo $i; ?>" data-whatever="@mdo" style="float: left;"></a>

           
  			 </ul>
        


             
       
         
        
   </form>
 
<!-- fin button li kaytala3 pop up-->
                <div class="modal fade" id="exampleModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                   <div class="modal-dialog modal-lg" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
<!-- debut button close pop up li lfo9-->
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></br>
<!-- fin button close pop up li lfo9 -->
                          <center><h4 class="list-group-item list-group-item-info" id="exampleModal<?php echo $i; ?>" style="color: black"> Update</h4></center>
                        </div>
<!-- debut body pop up-->


            
           
                        <div class="modal-body">

                        <!-- update page -->

      <form enctype="multipart/form-data"  action="{{url('/pages/'.$page->id)}}" method="POST" >

                                {{ csrf_field() }}

                                 {{ method_field('PUT') }}

                         <div class="form-group">
                                <label for="recipient-name" class="control-label">Title :</label>
                                <input  required class="form-control" id="message-text" name="title" type="text" value="{{$page->title_page}}">
                            </div> 
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Contenu :</label>
                            
                                <textarea required class="form-control" id="content<?php echo $i; ?>" name="contenu" max="250" > {{ $page->contenu }}</textarea>

                               
                            </div> 
                          
 
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary" name="valider">update</button>
                            </div>
                          </form>
                       </div>
   
<!-- fin pop up-->
   </ul>              
       
         </td>
       </tr>

          <script>
                            CKEDITOR.replace(
                                       "content<?php echo $i; ?>",
                                       {

                                       }
                              );
                </script>
@endforeach

</tbody>
               	
   </table>
                @else
                     <p>page  not exist !</p>  
                @endif
                
   </center>






   </div>




@endsection 


