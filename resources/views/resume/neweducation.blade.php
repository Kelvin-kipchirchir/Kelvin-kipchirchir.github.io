@extends('pages.dashboard')
@section('content')
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
<main class="signup-form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="card">
					<h3 class="card-header text-center">NEW EDUCATION</h3>
						<div class="card-body">

							<form method="POST" action="{{ route('register.education')}}" enctype="multipart/form-data">
								@csrf
								<div class="form-group mb-3">
									<input type="text" name="course"  placeholder="Course" class="form-control" required>
									@if($errors->has('course'))
									<span class="text-danger">{{$errors->first('course')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<input type="file" name="icon" id="icon" class="form-control">
								</div>
								<div class="form-group mb-3">
									<input type="text" name="institution"  placeholder="Institution" class="form-control" required>
									@if($errors->has('institution'))
									<span class="text-danger">{{$errors->first('institution')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<input type="text" name="location"  placeholder="Location" class="form-control" required>
									@if($errors->has('location'))
									<span class="text-danger">{{$errors->first('role')}}</span>
									@endif
								</div>
								
								<div class="form-group mb-3">
									<label>Start date</label>
									<input type="date" name="start_date"  placeholder="Date started" class="form-control" required>
									@if($errors->has('start_date'))
									<span class="text-danger">{{$errors->first('start_date')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<label>End date</label>
									<input type="date" name="end_date"  placeholder="Date Ended" class="form-control" required>
									@if($errors->has('end_date'))
									<span class="text-danger">{{$errors->first('end_date')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<label for="name">Activities</label>
									<textarea class="form-control"  name="about" rows="4" placeholder="project details..">
										
									</textarea>
								</div>
			

									</div>
									<div class="d-grid mx-auto">
										<button type="submit" class="btn btn-dark btn-block">ADD EDUCATION</button>
									</div>

							</form>
						</div>
				 
				</div>
			</div>
		</div>
	</div>
	
</main>
@endsection