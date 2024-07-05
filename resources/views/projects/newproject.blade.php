<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
<main class="signup-form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="card">
					<h3 class="card-header text-center">NEW PROJECT</h3>
						<div class="card-body">

							<form method="POST" action="{{ route('register.project')}}" enctype="multipart/form-data">
								@csrf
								<div class="form-group mb-3">
									<label for="category">Project type</label> 
									<select class="form-control mb-3" name="category"> 
										<option value="app">APP</option> 
										<option value="web">WEB</option> 
										<option value="networking">NETWORKING</option>
										<option value="cyber security">CYBER SECURITY</option>
										<option value="data science">DATA SCIENCE</option> 
										 </select>
								</div>
								<div class="form-group mb-3">
									<input type="text" name="project_name" placeholder="Project Name:" class="form-control" required autofocus>
									@if($errors->has('project_name'))
									<span class="text-danger">{{$errors->first('project_name')}}</span>
									@endif
								</div>

								<div class="image">
									<input type="file" name="image" id="image" class="form-control">
								</div>
								<div class="signup-form mb-3">
									<input type="file" name="gallery[]" id="image" class="form-control" multiple>
								</div>
								<div class="form-group mb-3">
									<input type="text" name="client" id="client" placeholder="Client" class="form-control" required autofocus>
									@if($errors->has('client'))
									<span class="text-danger">{{$errors->first('client')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<input type="text" name="technologies_used" id="client" placeholder="Technologies used" class="form-control" required autofocus>
									@if($errors->has('technologies_used'))
									<span class="text-danger">{{$errors->first('technologies_used')}}</span>
									@endif
								</div>

								<div class="form-group mb-3">
									<input type="date" name="date" id="date" placeholder="Project date" class="form-control" required autofocus>
									@if($errors->has('date'))
									<span class="text-danger">{{$errors->first('date')}}</span>
									@endif
								</div>

								<div class="form-group mb-3">
									<input type="text" name="url"  placeholder="Project Url" class="form-control" required>
									@if($errors->has('url'))
									<span class="text-danger">{{$errors->first('url')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<label for="name">About</label>
									<textarea class="form-control" id="about" name="details" rows="4" placeholder="project details..">
										
									</textarea>
								</div>

									</div>
									<div class="d-grid mx-auto">
										<button type="submit" class="btn btn-dark btn-block">register project</button>
									</div>

							</form>
						</div>
				 
				</div>
			</div>
		</div>
	</div>
	
</main>