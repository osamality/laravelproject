@extends('backend.master')
@section('content')

  <section class="content-header">
      <h1>
        Dashboard <small>Website Settings</small> </h1>

        <o1 class="breadcrumb">
        	<li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        	<li class="active">Website Settings</li>
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
	    		<form method="post" action="{{url('addSettings')}}" enctype="multipart/form-data">
	    			{{ csrf_field() }}
	    			<input type="hidden" name="tbl" value="{{encrypt('setups')}}">
		    	<!--	<div class ='form-group'>
		    				<input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
							<p><label for="file" style="cursor: pointer;">Upload Image</label></p>
							<p><img id="output" width="200" /></p>
		    		</div>-->

					<div class="form-group">
		    			<label>Title</label>
		    			<input type="text" name="title" class="form-control">
		    		</div>										

		    		<div class="form-group">
		    			<label>Site Title</label>
		    			<input type="text" name="meta_title" class="form-control">
		    		</div>

		    		<div class="form-group">
		    			<label>Twitter Link</label>
		    			<input type="Website" name="twlink" class="form-control">
		    		</div>

		    		<div class="form-group">
		    			<label>Facebook Link</label>
		    			<input type="Website" name="fblink" class="form-control">
		    		</div>

		    		<div class="form-group">
		    			<label>LinkedIn Link</label>
		    			<input type="Website" name="lnlink" class="form-control">
		    		</div>

		    	
			    	
			    	<div class="form-group">
			    		<button class="btn btn-success">Update</button>
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
		    			<label>LinkedIn Link</label>
		    			<input type="Website" name="lnlink" value="{{$data->lnlink}}" class="form-control">
		    		</div>

		    	
			    	
			    	<div class="form-group">
			    		<button class="btn btn-success">Update</button>
			    	</div>
	    		</form>
	    	</div>
	    	@endif
 	   </div>
    </section>
<!--<script>
	var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);

	var input = document.getElementById( 'file-upload' );
	var infoArea = document.getElementById( 'file-upload-filename' );
	input.addEventListener( 'change', showFileName );
	function showFileName( event ) {
	  var input = event.srcElement;
	  var fileName = input.files[0].name;
	  infoArea.textContent = 'File name: ' + fileName;
	}
};
/*fieldCounter = 1;
 $('.addField').click(function(){
	fieldCounter++;
	if(fieldCounter <= 5){
		var newField = $(document.createElement('div')).attr('class','form-group');
		newField.after().html('<label>Social Profile Links</label><input type="text" name="Social[]" class="form-control"></div>');
		newField.appendTo('#socialGroup');
	}else{
		$('#socialError').show();
	}
})*/
</script>-->



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
@stop