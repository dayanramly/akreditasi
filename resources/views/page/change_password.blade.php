@extends('layouts.default')
@section('title', 'Change Password')
@section('content')

<div class="col s12">
	<div class="row">
		<div class="col s8 offset-s2 center" style="background-color:#fefefe">
			<div class="new-password z-depth-2 col s12">
				<form autocomplete="off" method="POST">
					<div class="s12">
						<h4 class="darken"> Ganti Password</h4>
					</div>
					<div class="divider"></div>
					<div class="input-field col s12">
						<i class="mdi-action-lock-open prefix"></i>
						<input type="password" name="oldpass" id="oldpass" maxlength="30" required="">
						<label for="oldpass">Password Lama</label>
					</div>
					<div class="input-field col s12">
						<i class="mdi-action-lock-outline prefix"></i>
						<input type="password" name="pass" id="newpass" maxlength="30" required="">
						<label for="newpass">Password Baru</label>
					</div>					
					<div class="input-field col s12">
						<i class="mdi-action-lock prefix"></i>
						<input type="password" name="confirmpass" id="confirmpass" maxlength="30" required="">
						<label for="confirmpass">Konfirmasi Password Baru</label>
					</div>
					<div class="center-btn">
						<button type="submit" class="waves-effect waves-light btn btn-large orange darken-2">
							Ganti Password<i class="material-icons right">send</i>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@stop