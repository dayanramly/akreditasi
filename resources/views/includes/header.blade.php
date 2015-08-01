<nav class="grey darken-3 z-depth-0">
	<div class="nav-wrapper container">
		<a href="{{URL::to('/')}}" class="brand-logo"><i class="material-icons left" style="margin-right:5px; color:#FF9800;">offline_pin</i>AKREDITASI</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="{{URL::to('/')}}"><i class="material-icons left">assessment</i>Penilaian</a></li>
			<li><a href="{{URL::to('/asesor')}}"><i class="material-icons left">supervisor_account</i>Asesor</a></li>
			<li><a href="{{URL::to('/newpass')}}"><i class="material-icons left">lock_outline</i>Ganti Password</a></li>
			<li><a href="{{URL::to('/login')}}"><i class="material-icons left">power_settings_new</i>Logout</a></li>
		</ul>
		<ul class="side-nav" id="mobile-demo">
			<li><a href="{{URL::to('/')}}"><i class="material-icons left">assessment</i>Penilaian</a></li>
			<li><a href="{{URL::to('/asesor')}}"><i class="material-icons left">supervisor_account</i>Asesor</a></li>
			<li><a href="{{URL::to('/newpass')}}"><i class="material-icons left">lock_outline</i>Ganti Password</a></li>
			<li><a href="{{URL::to('/login')}}"><i class="material-icons left">power_settings_new</i>Logout</a></li>
      </ul>
	</div>
</nav>