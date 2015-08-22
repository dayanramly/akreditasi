@extends('layouts.default')
@section('title', 'Change Password')
@section('content')

<div class="col s12">
	<div class="row">
		<div class="col s8 offset-s2 center" style="background-color:#fefefe">
			<div class="new-password z-depth-2 col s12">
				<form autocomplete="off" method="POST">
					{!! csrf_field() !!}
					<div class="s12">
						<h4 class="darken"> Edit User</h4>
					</div>
					<div class="divider" style="margin-bottom:20px;"></div>
					<div class="input-field col s12">
						<i class="mdi-action-account-circle prefix"></i>
						<input type="text" name="uname" id="uname" maxlength="30" required="" value="{!! $dataUser->uname !!} {{ old('uname') }}">
						<label for="uname">Username</label>
					</div>
					@if ($errors->has('uname'))<p class="error-class">{!!$errors->first('uname')!!}</p>@endif
					<div class="input-field col s12">
						<i class="mdi-action-lock-outline prefix"></i>
						<input type="text" name="password" id="newpass" maxlength="30" >
						<label for="newpass">Password Baru</label>
						<p class="help-class">*kosongkan password apabila tidak ingin mengganti password</p>
					</div>	

					<div class="center-btn">
						<button type="submit" class="waves-effect waves-light btn btn-large orange darken-2">
							Update User<i class="material-icons right">send</i>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@stop