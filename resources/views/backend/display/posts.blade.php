@extends('backend.master')
@section('content')

  <section class="content-header">
      <h1>
        Dashboard <small>All Posts</small> </h1>

        <o1 class="breadcrumb">
        	<li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        	<li class="active">All Posts</li>
        </o1>
    
    </section>

    <section class="content"> 
     	<div class="row">
    		@if(Session::has('message'))
    		<div class="col-sm-12">
    			<div class="alert alert-success alert-dismissable">
    				{{session::get('message')}}
    				<a class="close" data-dismiss="alert">&times;</a>
    			</div>
    		</div>
    		@endif

	     

	    	<div class="col-sm-12">
	    		<table class="table table-striped table-hover table-bordered">
	    			<thead>
	    				<tr>
		    				<th>SN</th>
		    				<th>Title</th>
		    				<th>Description</th>
		    				<th>Category</th>
		    				<th>Status</th>
		    				<th>Action</th>
		    			</tr>
	    			</thead>
	    			<tbody>
	    				@foreach($data as $key=>$post)
	    				<tr>
	    					<td>{{++$key}}</td>
		    				<td>{{$post->title}}</td>
		    				<td>{{$post->description}}</td>
		    				<td>{{$post->category}}</td>
		    				<td>{{$post->status}}</td>
		    				<td>
		    				<a href="{{url('editPost')}}/{{$post->conid}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>		    					
		    				<a href="{{url('deletePost')}}/{{$post->conid}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
		    				</td>
	    				</tr>
	    				@endforeach
	    			</tbody>
	    		</table>
	    	</div>
 	    </div>
    </section>


@stop