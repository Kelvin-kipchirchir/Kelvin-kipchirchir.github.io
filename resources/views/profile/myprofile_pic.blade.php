<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
<main class="signup-form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="card">
					<h3 class="card-header text-center">MY PROFILE PIC</h3>
						<div class="card-body">
           
							<form method="POST" action="{{ route('register.profile_pic',['name'=>ucfirst(Auth()->user()->name)])}}" enctype="multipart/form-data">
								@csrf
								
                              
								<div class="image">
									<input type="file" name="profile_pic" id="image" class="form-control">
								</div>
							
									<div class="d-grid mx-auto">
										<button type="submit" class="btn btn-dark btn-block">Update Profile pic</button>
									</div>
							

							</form>
							 
						</div>
				 
				</div>
			</div>
		</div>
	</div>
	
</main>