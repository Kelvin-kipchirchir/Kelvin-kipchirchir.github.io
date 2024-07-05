@extends('pages.dashboard')
@section('content')
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
<main class="signup-form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="card">
					<h3 class="card-header text-center">NEW CERTIFICATE</h3>
						<div class="card-body">

							<form method="POST" action="{{ route('register.certification')}}" enctype="multipart/form-data">
								@csrf
								<div class="form-group mb-3">
									<input type="text" name="name"  placeholder="Cert Name" class="form-control" required>
									@if($errors->has('name'))
									<span class="text-danger">{{$errors->first('name')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<label>Certificate</label>
									<input type="file" name="certificate" class="form-control">
								</div>
								<div class="form-group mb-3">
									<input type="text" name="institution"  placeholder="Institution" class="form-control" required>
									@if($errors->has('institution'))
									<span class="text-danger">{{$errors->first('institution')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<input type="text" name="certNumber"  placeholder="Cert Number" class="form-control" required>
									@if($errors->has('certNumber'))
									<span class="text-danger">{{$errors->first('certNumber')}}</span>
									@endif
								</div>
								
								<div class="form-group mb-3">
									<label>date given</label>
									<input type="date" name="date_given"  placeholder="Date Given" class="form-control" required>
									@if($errors->has('date_given'))
									<span class="text-danger">{{$errors->first('date_given')}}</span>
									@endif
								</div>
									</div>
									<div class="d-grid mx-auto">
										<button type="submit" class="btn btn-dark btn-block">Add Certificate</button>
									</div>

							</form>
						</div>
				 
				</div>
			</div>
		</div>
	</div>
	
</main>
@endsection