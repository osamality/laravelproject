@extends('backend.master')
@section('content')

  <section class="content-header">
      <h1>
        Dashboard <small>Add new Service</small> </h1>

        <o1 class="breadcrumb">
        	<li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        	<li class="active">Add new Service</li>
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

    		@if($data == '')

	        <div class="col-sm-6">
	    		<form method="post" action="{{url('addService')}}">
	    			{{ csrf_field() }}
	    			<input type="hidden" name="tbl" value="{{encrypt('services')}}">
		    	

					<div class="form-group">
		    			<label>Title</label>
		    			<input type="text" name="title" class="form-control">
		    		</div>										

		    		<div class="form-group">
		    			<label>Description</label>
		    			<textarea name="description" class="form-control" rows="10"></textarea> 
		    		</div>

		    		<div class="form-group">
		    			<label>icon</label>
		    			<input type="Website" name="icon" class="form-control">
		    		</div>

		    		<div class="form-group">
		    			<label>Status</label>
		    			<select name="status" class="form-control">
		    				<option>on</option>
		    				<option>off</option>
		    			</select>
		    		</div>

		    		<div class="form-group">
		    			<label>LinkedIn Link</label>
		    			<input type="Website" name="lnlink" class="form-control">
		    		</div>

		    	
			    	
			    	<div class="form-group">
			    		<button class="btn btn-success">Add Service</button>
			    	</div>
	    		</form>
	    	</div>

	    	@else

	    	 <div class="col-sm-6">
	    		<form method="post" action="{{url('addSettings')}}" enctype="multipart/form-data">
	    			{{ csrf_field() }}
	    			<input type="hidden" name="tbl" value="{{encrypt('setups')}}">
		    		<!--<div class ='form-group'>
		    				<input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
							<p><label for="file" style="cursor: pointer;">Upload Image</label></p>
							<p><img id="output" src="{{url('public/setups')}}" /></p>
		    		</div>-->

					<div class="form-group">
		    			<label>Title</label>
		    			<input type="text" name="title" value="{{$data->title}}" class="form-control">
		    		</div>					

		    		<div class="form-group">
		    			<label>Site Title</label>
		    			<input type="text" name="meta_title" value="{{$data->meta_title}}" class="form-control">
		    		</div>

		    		<div class="form-group">
		    			<label>Twitter Link</label>
		    			<input type="Website" name="twlink" value="{{$data->twlink}}" class="form-control">
		    		</div>

		    		<div class="form-group">
		    			<label>Facebook Link</label>
		    			<input type="Website" name="fblink" value="{{$data->fblink}}" class="form-control">
		    		</div>

			    	<div class="form-group">
			    		<button class="btn btn-success">Update</button>
			    	</div>
	    		</form>
	    	</div>
	    	@endif
 	   </div>
    </section>



<style>
	.socialField{
		position: relative;

	}
	.addField{
		position: absolute;
		top: 0;
		right: 0;
	}
	#socialError{
		display: none;
	}
</style>


<script type="{{url('ckeditor.js')}}"></script>
@stop