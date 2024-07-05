@extends('pages.dashboard')
@section('content')
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
<main class="signup-form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="card">
					<h3 class="card-header text-center">MY EXPERIENCE</h3>
						<div class="card-body">
                           @foreach($experiences as $experience)
							<form method="POST" action="{{ route('update.experience',$experience->id)}}" enctype="multipart/form-data">
								@csrf
								<div class="form-group mb-3">
									<input type="text" value="{{$experience->role}}"  placeholder="Role" class="form-control" required>
									@if($errors->has('role'))
									<span class="text-danger">{{$errors->first('role')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<input type="file" name="icon" id="icon" class="form-control">
								</div>
								<div class="form-group mb-3">
									<input type="text" value="{{$experience->place}}"  placeholder="Place" class="form-control" required>
									@if($errors->has('place'))
									<span class="text-danger">{{$errors->first('place')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<input type="text" value="{{$experience->location}}"  placeholder="Location" class="form-control" required>
									@if($errors->has('location'))
									<span class="text-danger">{{$errors->first('role')}}</span>
									@endif
								</div>
								
								<div class="form-group mb-3">
									<label>Start date</label>
									<input type="date" value="{{$experience->start_date}}"  placeholder="Date started" class="form-control" required>
									@if($errors->has('start_date'))
									<span class="text-danger">{{$errors->first('start_date')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<label>End date</label>
									<input type="date" value="{{$experience->end_date}}"  placeholder="Date Ended" class="form-control" required>
									@if($errors->has('end_date'))
									<span class="text-danger">{{$errors->first('end_date')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<label for="name">Activities</label>
									<input type="text" value="{{$experience->activities}}"  placeholder="Date Ended" class="form-control" required>
									@if($errors->has('end_date'))
									<span class="text-danger">{{$errors->first('end_date')}}</span>
									@endif
								</div>
			

									</div>
									<div class="d-grid mx-auto">
										<button type="submit" class="btn btn-dark btn-block">update experience</button>
									</div>

							</form>
							@endforeach
						</div>
				 
				</div>
			</div>
		</div>
	</div>
	
</main>
@endsection