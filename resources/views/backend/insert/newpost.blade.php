@extends('backend.master')
@section('content')

  <section class="content-header">
      <h1>
        Dashboard <small>Add New Post</small> </h1>

        <o1 class="breadcrumb">
        	<li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        	<li class="active">Add New Post</li>
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
	    		<form method="post" action="{{url('addPost')}}" enctype="multipart/form-data">
	    			{{ csrf_field() }}
	    			<input type="hidden" name="tbl" value="{{encrypt('contents')}}">
		    		
					<div class="form-group">
		    			<label>Title</label>
		    			<input type="text" name="title" class="form-control">
		    		</div>										

		    		<div class="form-group">
		    			<label>Description</label>
		    			<textarea class="form-control" name="description" rows="10"></textarea>
		    		</div>

		    		<div class="form-group">
		    			<label>Category</label>
		    			<select name="category" class="form-control">
		    				@foreach($cats as $cat)
		    				<option>{{$cat->title}}</option>
		    				@endforeach
		    				<option>Home</option>	
		    			</select>
		    		</div>

		    		<div class="form-group">
		    			<label>Status</label>
		    			<select name="status" class="form-control">
		    				<option>on</option>
		    				<option>off</option>
		    			</select>
		    		</div>

		    	
		    	
			    	
			    	<div class="form-group">
			    		<button class="btn btn-success">Add Post</button>
			    	</div>
	    		</form>
	    	</div>

	   
 	   </div>
    </section>


<script>
	var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

<script src="{{url('resources/views/backend/ckeditor/ckeditor.js')}}"></script>
<script >
	CKEDITOR.replace('description',{});
</script>
@stop