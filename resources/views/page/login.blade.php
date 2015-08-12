@extends('layouts.login')
@section('title', 'Login Page')
@section('content')

<div class="col s12">
	<div class="row">
		<div class="col s12 login-header">
			<h1>Login</h1>
			<p class="flow-text">Selamat datang di sistem akreditasi.</p>
		</div>
	</div>
	<div class="row">
		<div class="col s6 offset-s3 center">
			<div class="form-login z-depth-3 col s12">
				<form autocomplete="off" method="POST" action="/login">
					{!! csrf_field() !!}

					<div class="input-field col s12">
						<i class="mdi-action-account-circle prefix"></i>
						<input type="text" name="username" id="username" maxlength="30" required="" value="{{ old('username') }}">
						<label for="username">Username</label>
					</div>
					<div class="input-field col s12">
						<i class="mdi-communication-vpn-key prefix"></i>
						<input type="password" name="pass" id="pass" maxlength="30" required="">
						<label for="pass">Password</label>
					</div>
					<div class="center-btn">
						<button type="submit" class="waves-effect waves-light btn btn-large orange darken-2">
							Login<i class="material-icons right">send</i>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@stop