
<link href="assets/css/login.css" rel="stylesheet">
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
<main class="login-form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<div class="card">
					<h3 class="card-header text-center">RESET PASSWORD</h3>
						<div class="card-body">
							<div>
							<form method="POST" action="{{ route('reset.password.post')}}">
								@csrf
								@if (Session::has('success'))
                                 <div class="alert alert-success">
                                  {{Session::get('success')}}
                                </div>
                                @endif
                                @if (Session::has('error'))
                               <div class="alert alert-danger">
                                   {{Session::get('error')}}
                              </div>
                              @endif
								<input type="hidden" name="token" value="{{$token}}">
								<div class="form-group mb-3">
									<input type="text" name="email" id="email" placeholder="email" class="form-control">
								</div>
								<div class="form-group mb-3">
									<input type="password" name="password" id="password" placeholder="password" class="form-control">
									@if($errors->has('password'))
									<span class="text-danger">{{$errors->first('password')}}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<input type="password" name="password_confirmation"placeholder="password_confirmation" class="form-control">
									@if($errors->has('password_confirmation'))
									<span class="text-danger">{{$errors->first('password_confirmation')}}</span>
									@endif
								</div>
									<div class="d-grid mx-auto">
										<button type="submit" class="btn btn-primary">Reset password</button>
									</div>
									
                   
									

							</form>
						</div>
				 
				</div>
			</div>
		</div>
	</div>
	
</main>