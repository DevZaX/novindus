@extends('dashboard.index')
@section('content')

        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="chmn">
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> Home</a> </li>
                <li><a href="{{ url('/options')}} "> Options</a></li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Default box -->
        <div class="box">

            <div class="container">

            <h3>Update home page pictures</h3>

            <form action="{{url('/options')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label>Index:</label>
                <div class="form-group">
                <select name="index">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                </div>
                <div class="form-group">
                <input type="file" name="picture" />
                </div>
                <button class="btn btn-default">Update</button>
                </form>

                <table class="table">
                    <thead>
                    <th>index</th>
                    <th>picture</th>
                    </thead>
                    <tbody>
                    @foreach($listPicture as $picture)
                        <tr>
                            <td>{{$picture->index}}</td>
                            <td><img alt='' src="{{asset('storage/'.$picture->picture)}}" width="50" height="50" /></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
<form action="{{url('infos/'.$info->id)}}" method="post" style="margin-bottom:20px;">
        {{ csrf_field() }}
                         {{ method_field('PUT') }}
    <div class="form-group">
        <label>changer numero telephone ici</label>
        <input type="text" name="tele" value="{{$info->tele}}" class="form-control">
    </div>
        <label>changer l'adress mail  ici</label>
    <div class="form-group">
         <input type="text" name="mail" value="{{$info->mail}}" class="form-control">
    </div>
    <button class="btn btn-primary">update</button>
</form>

            </div>

@endsection