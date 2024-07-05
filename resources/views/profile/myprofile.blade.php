@extends('pages.dashboard')
@section('content')
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
<main class="signup-form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<h3 class="card-header text-center">Update Profile</h3>
						<div class="card-body">
							@foreach($profile_pic as $profile_pic)

								<p><img src="{{url ('public/images/'.$profile_pic->profile_pic)}}" style="height: 50px;width: 50px;"></p><a href="{{route('add.profile_pic')}}" class="btn btn-dark">Update Image</a><br>

								@endforeach
							@foreach($profile as $profile)

							<form method="POST" action="{{ route('update.profile',$profile->email)}}" enctype="multipart/form-data">
								@csrf
								
								<div class="form-group mb-3">
									<input type="text" name="name" value="{{$profile->name}}" placeholder="Name" class="form-control" required autofocus>
									@if($errors->has('name'))
									<span class="text-danger">{{$errors->first('name')}}</span>
									@endif
								</div>

								<div class="form-group mb-3">
									<input type="text" name="email" value="{{$profile->email}}"  id="email" placeholder="Email" class="form-control" required autofocus>
									@if($errors->has('email'))
									<span class="text-danger">{{$errors->first('email')}}</span>
									@endif
								</div>

								<div class="form-group mb-3">
									<input type="text" name="phone" value="{{$profile->phone}}"
									placeholder="Phone" class="form-control" required autofocus>
									@if($errors->has('phone'))
									<span class="text-danger">{{$errors->first('phone')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<input type="text" name="location" value="{{$profile->location}}"
									placeholder="Location" class="form-control" required autofocus>
									@if($errors->has('location'))
									<span class="text-danger">{{$errors->first('location')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<input type="text" name="website" value="{{$profile->website}}"
									placeholder="Website" class="form-control" required autofocus>
									@if($errors->has('website'))
									<span class="text-danger">{{$errors->first('website')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<input type="date" name="birth_date" value="{{$profile->birth_date}}"
									placeholder="Date of Birth" class="form-control" required autofocus>
									@if($errors->has('birth_date'))
									<span class="text-danger">{{$errors->first('birth_date')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<label for="name">bio</label>
									<input type="textarea" class="form-control" id="about" name="bio" rows="4" placeholder="project details.." value="{{$profile->bio}}">
										
								</div>

									<div class="d-grid mx-auto">
										<button type="submit" class="btn btn-success btn-block">Update</button>
									</div>
                             @endforeach
							</form>
						</div>
				 
				</div>
			</div>
		</div>
	</div>
	
</main>
@endsection