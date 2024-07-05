@extends('pages.dashboard')
@section('content')
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
<main class="signup-form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="card">
					<h3 class="card-header text-center">NEW SKILL</h3>
						<div class="card-body">

							<form method="POST" action="{{ route('register.skill')}}" enctype="multipart/form-data">
								@csrf
								<div class="form-group mb-3">
									<label for="category">Skill type</label> 
									<select class="form-control mb-3" name="category"> 
										<option value="software development">Software Development</option> 
										<option value="cyber security">Cyber Security</option> 
										<option value="networking">Networking</option> 
										<option value="data science">Data Science</option> 
										<option value="cloud Computing">Cloud Computing</option> 
										 </select>
								</div>
								<div class="form-group mb-3">
									<input type="file" name="icon" id="icon" class="form-control">
								</div>
								<div class="form-group mb-3">
									<input type="text" name="skill"  placeholder="Skill name" class="form-control" required>
									@if($errors->has('skill'))
									<span class="text-danger">{{$errors->first('skill')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<input type="number" name="rate"  placeholder="Rate" class="form-control" required>
									@if($errors->has('rate'))
									<span class="text-danger">{{$errors->first('rate')}}</span>
									@endif
								</div>
			

									</div>
									<div class="d-grid mx-auto">
										<button type="submit" class="btn btn-dark btn-block">register skill</button>
									</div>

							</form>
						</div>
				 
				</div>
			</div>
		</div>
	</div>
	
</main>
@endsection