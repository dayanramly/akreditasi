<ul id="dropdown1" class="dropdown-content">
	<li><a href="{{URL::to('/user/edit')}}/{{Auth::user()->id}}/{{Auth::user()->group_id}}"><i class="material-icons left">lock_outline</i>Ganti Password</a></li>
	<li class="divider"></li>
	<li><a href="{{URL::to('/auth/logout')}}"><i class="material-icons left">power_settings_new</i>Logout</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
	<li><a href="{{URL::to('/user/2')}}"><i class="material-icons left">lock_outline</i>Asesor</a></li>
	<li class="divider"></li>
	<li><a href="{{URL::to('/user/3')}}"><i class="material-icons left">power_settings_new</i>Public</a></li>
</ul>
<nav class="grey lighten-3 z-depth-1">
	<div class="nav-wrapper container">
		<a href="{{URL::to('/')}}" class="brand-logo"><img src="{{{URL::to('/assets/img/logo-sm.png')}}}"></a>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul id="nav-mobile" class="right hide-on-med-and-down black-text">

{{-- 			@if(Auth::user()->group_id !=2)
			
			@endif
 --}}
			@if(Auth::user()->group_id ==3)
			<li><a href="{{URL::to('/isidata')}}"><i class="material-icons left">toc</i>Pertanyaan</a></li>
			<li><a href="{{URL::to('/lihathasil')}}"><i class="material-icons left">assessment</i>Lihat Hasil</a></li>
			@endif

			@if(Auth::user()->group_id != 3)
			<li><a href="{{URL::to('/asesor')}}"><i class="material-icons left">supervisor_account</i>Asesor</a></li>
			{{-- <li><a href="{{URL::to('/user')}}"><i class="material-icons left">perm_identity</i>User</a></li> --}}
			@endif
			@if(Auth::user()->group_id ==1)
			<li><a class="dropdown-button" href="#!" data-activates="dropdown2"><i class="material-icons left">perm_identity</i>User<i class="material-icons right">arrow_drop_down</i></a></li>
			@endif
			<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Welcome, {{ Auth::user()->uname }}<i class="material-icons right">arrow_drop_down</i></a></li>
		</ul>
{{-- 		<ul class="side-nav" id="mobile-demo">
			<li><a href="#">Welcome, Dayan</a></li>
			<li class="divider"></li>
			<li><a href="{{URL::to('/isidata')}}"><i class="material-icons left">assessment</i>Pertanyaan</a></li>
			@if(Auth::user()->group_id != 3)
			<li><a href="{{URL::to('/asesor')}}"><i class="material-icons left">supervisor_account</i>Asesor</a></li>
			<li><a href="{{URL::to('/user')}}"><i class="material-icons left">perm_identity</i>User</a></li>
			@endif
			<li><a href="{{URL::to('/user/edit')}}/{{Auth::user('id')}}"><i class="material-icons left">lock_outline</i>Ganti Password</a></li>
			<li><a href="{{URL::to('/auth/logout')}}"><i class="material-icons left">power_settings_new</i>Logout</a></li>
		</ul> --}}
	</div>
</nav>