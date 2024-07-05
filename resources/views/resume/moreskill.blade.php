@extends('pages.dashboard')
@section('content')
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
<main class="signup-form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="card">

					<h3 class="card-header text-center"> SKILL</h3>
						<div class="card-body">
                            @foreach($skills as $skill)
							<form method="POST" action="{{ route('update.skill',$skill->skill)}}" enctype="multipart/form-data">
								@csrf
								<div class="form-group mb-3">
									<input type="text"   value="{{$skill->category}}" class="form-control" required>
									@if($errors->has('rate'))
									<span class="text-danger">{{$errors->first('rate')}}</span>
									@endif
									
								</div>
								<div class="form-group mb-3">
									<input type="text" value="{{$skill->skill}}"  class="form-control" required>
									@if($errors->has('skill'))
									<span class="text-danger">{{$errors->first('skill')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<input type="number"  value="{{$skill->rate}}" class="form-control" required>
									@if($errors->has('rate'))
									<span class="text-danger">{{$errors->first('rate')}}</span>
									@endif
								</div>
			

									</div>
									<div class="d-grid mx-auto">
										<button type="submit" class="btn btn-dark btn-block">update skill</button>
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