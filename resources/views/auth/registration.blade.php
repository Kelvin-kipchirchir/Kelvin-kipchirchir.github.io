<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
<main class="signup-form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<div class="card">
					<h3 class="card-header text-center">Sign Up</h3>
						<div class="card-body">

							<form method="POST" action="{{ route('register.custom')}}">
								@csrf
								<div class="form-group mb-3">
									<input type="text" name="name" id="name" placeholder="Name" class="form-control">
									<span class="text-danger">
                                             @error('name')
                                             {{$message}}
                                             @enderror
                                            </span>
								</div>

								<div class="form-group mb-3">
									<input type="text" name="email" id="email" placeholder="Email" class="form-control" required autofocus>
									<span class="text-danger">
                                             @error('email')
                                             {{$message}}
                                             @enderror
                                            </span>
								</div>

								<div class="form-group mb-3">
									<input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
									<span class="text-danger">
                                             @error('password')
                                             {{$message}}
                                             @enderror
                                            </span>
								</div>

								
									<div class="d-grid mx-auto">
										<button type="submit" class="btn btn-success btn-block">Signin</button>
									</div>
							
					                <div class="register-link">
						            <p>Don't have account??</p><a href="{{route('login')}}">Login Here</a>
					                </div>

							</form>
						</div>
				 
				</div>
			</div>
		</div>
	</div>
	
</main>