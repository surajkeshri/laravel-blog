@extends('layouts.main')

@section('main-section')


	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Sign up to devil Blog</h3>
		<div class="card-text">
			<!--
			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
			<form method="POST" action="{{ url('/singUp') }}">
				@csrf
				<!-- to error: add class "has-danger" -->
                <div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email"  name="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					
					<input type="password" name="password" class="form-control form-control-sm" id="exampleInputPassword1">
				</div>
				<button type="submit" class="btn btn-primary btn-block">Sign Up</button>
				
				<div class="sign-up">
				 have an account? <a href="{{ url('/') }}">Singin</a>
				</div>
			</form>
		</div>
	</div>
</div>


@endsection