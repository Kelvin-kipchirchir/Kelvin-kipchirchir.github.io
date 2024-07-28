
<link href="assets/css/login.css" rel="stylesheet">
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
<main class="login-form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<div class="card">
					<h3 class="card-header text-center">Sign In</h3>
						<div class="card-body">
							<div>
							<form method="POST" action="{{ route('login.custom')}}">
								@csrf
								@if (Session::has('success'))
                                 <div class="alert alert-success">
                                  {{Session::get('success')}}
                                </div>
                                @endif
                                @if (Session::has('fail'))
                               <div class="alert alert-danger">
                                   {{Session::get('fail')}}
                              </div>
                                @endif
								<div class="form-group mb-3">
									<input type="text" name="email" id="email" placeholder="email" class="form-control">
									<span class="text-danger">
                                             @error('email')
                                             {{$message}}
                                             @enderror
                                            </span>
								</div>
								<div class="form-group mb-3">
									<input type="password" name="password" id="password" placeholder="password" class="form-control">
									<span class="text-danger">
                                             @error('password')
                                             {{$message}}
                                             @enderror
                                            </span>
								</div>

									<div class="form-group mb-3">
										<div class="checkbox">
											<label>
												<input type="checkbox" name="remember" >Remember me
											</label>
											<a href="{{route('forget.password.get')}}" class = "remember-forgot" >Reset Password</a>
										</div>
									</div>
									<div class="d-grid mx-auto">
										<button type="submit" class="btn btn-success btn-block">Signin</button>
									</div>
									
                   
									<div class="register-link">
						            <p>Don't have account??</p><a href="{{route('register')}}">Register</a>
					                </div>

							</form>
						</div>
				 
				</div>
			</div>
		</div>
	</div>
	
</main>