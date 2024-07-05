<link href="assets/css/login.css" rel="stylesheet">
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
@if(count($errors)>0)
@foreach( $errors->all() as $error)
<div class="alert alert-danger">
	{{ $errors }}
</div>
@endforeach
@endif

@if(session('success'))
<div class="alert alert-success">
	{{ session ('success')}}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
	{{ session ('error')}}
</div>
@endif