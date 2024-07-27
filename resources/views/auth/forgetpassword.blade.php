
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
							<form method="POST" action="{{route('forget.password.post')}}">
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
									<input type="email" name="email" placeholder="email" class="form-control" >
									<span class="text-danger">
                                             @error('email')
                                             {{$message}}
                                             @enderror
                                            </span>
								</div>
									<div class="d-grid mx-auto">
										<button type="submit" class="btn btn-dark btn-block">Send Password Reset Link</button>
									</div>
									
                   
									

							</form>
						</div>
				 
				</div>
			</div>
		</div>
	</div>
	
</main>