<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
<main class="signup-form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card">
					<h3 class="card-header text-center">Register</h3>
						<div class="card-body">

							<form method="POST" action="{{ route('register.custom')}}">
								@csrf
								<div class="form-group mb-3">
									<input type="text" name="name" id="name" placeholder="Name" class="form-control" required autofocus>
									@if($errors->has('name'))
									<span class="text-danger">{{$errors->first('name')}}</span>
									@endif
								</div>

								<div class="form-group mb-3">
									<input type="text" name="email" id="email" placeholder="Email" class="form-control" required autofocus>
									@if($errors->has('email'))
									<span class="text-danger">{{$errors->first('email')}}</span>
									@endif
								</div>

								<div class="form-group mb-3">
									<input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
									@if($errors->has('password'))
									<span class="text-danger">{{$errors->first('password')}}</span>
									@endif
								</div>

									</div>
									<div class="d-grid mx-auto">
										<button type="submit" class="btn btn-dark btn-block">Sign Up</button>
									</div>
									<li class="nav-item">
						            <p>Already having account??</p><a class="d-grid mx-auto" href="{{ route('login')}}">Login</a>
					                </li>

							</form>
						</div>
				 
				</div>
			</div>
		</div>
	</div>
	
</main>