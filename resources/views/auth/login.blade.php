
<link href="assets/css/login.css" rel="stylesheet">
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
<main class="login-form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<div class="card">
					<h3 class="card-header text-center">LOGIN</h3>
						<div class="card-body">
							<div>
							<form method="POST" action="{{ route('login.custom')}}">
								@csrf
								<div class="form-group mb-3">
									<input type="text" name="email" id="email" placeholder="email" class="form-control" required autofocus>
								</div>
								<div class="form-group mb-3">
									<input type="password" name="password" id="password" placeholder="password" class="form-control" required>
									@if($errors->has('emailPassword'))
									<span class="text-danger">{{$errors->first('emailPassword')}}</span>
									@endif
								</div>

									<div class="form-group mb-3">
										<div class="checkbox">
											<label>
												<input type="checkbox" name="remember" >Remember me
											</label>
											<a href="#" class = "remember-forgot" >Forgot Password</a>
										</div>
									</div>
									<div class="d-grid mx-auto">
										<button type="submit" class="btn btn-dark btn-block">Signin</button>
									</div>
									
                   
									<div class="register-link">
						            <p>Don't have account??</p><a href="#">Register</a>
					                </div>

							</form>
						</div>
				 
				</div>
			</div>
		</div>
	</div>
	
</main>