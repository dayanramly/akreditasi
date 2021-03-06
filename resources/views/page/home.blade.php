@extends('layouts.default')
@section('title', 'Home Page')
@section('content')

<div class="col s12 center" style="padding-top: 20px;">

	<h3>SELAMAT DATANG {{{strtoupper(Auth::user()->uname)}}}</h3>
	<h6>INSTRUMEN AKREDITASI SEKOLAH MENENGAH KEJURUAN/MADRASAH ALIYAH KEJURUAN(SMK/MAK)</h6>
	<div class="divider" style="margin:40px 0px;"></div>
	@if(Auth::user()->group_id==3)
	<div class="row">
		<div class="col s12" style="background:#fafafa;margin-bottom:15px;padding:15px;">
			@if(!empty($dataUser))
			<table class="responsive-table">
				<thead>
					<tr>
						<th data-field="id">Nama</th>
						<th data-field="name">Sekolah/Madrasah</th>
						<th data-field="prodi">Program Keahlian</th>
						<th data-field="status">Status</th>
						<th data-field="act"></th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>{{{Auth::user()->uname}}}</td>
						<td>{{{$dataUser->sekolah}}}</td>
						<td>{{{$dataUser->progli}}}</td>
						<td>
							@if(!empty($jawaban->selesai))
							<span class="home-status light-green accent-4">Sudah Lengkap</span>
							@else
							<span class="home-status red">Belum Lengkap</span>
							@endif
						</td>
						<td>
							<a href="{!! URL::to('/lihathasil') !!}" class="waves-effect waves-light btn"><i class="material-icons right">assignment</i>Hasil</a>
						</td>
					</tr>
				</tbody>
			</table>
			@else
			<p>Anda belum mengisi data, silakan isi data terlebih dahulu.</p>
			@endif
		</div>
	</div>
	<div class="row">
		<div class="col s12 center">
			<a href="{!! URL::to('/isidata') !!}" class="waves-effect waves-light btn orange darken-1"><i class="material-icons right">send</i>Mulai Pengisian Data</a>
		</div>
	</div>
	@endif
</div>
@stop